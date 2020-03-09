<?php

class Certifications_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function getAll()
    {
        $query = $this->db->get('certifications');
        return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('certifications', array('id' => $id));
        return $query->row();
    }

    private function insert($certifications)
    {
        return $this->db->insert('certifications', $this);
    }

    private function update($certifications)
    {
        $this->db->set('title', $this->title);
        $this->db->set('content', $this->content);
        $this->db->where('id', $this->id);
        return $this->db->update('certifications');
    }

    public function delete()
    {
        $this->db->where('id', $this->id);
        return $this->db->delete('certifications');
    }

    public function save()
    {
        if (isset($this->id)) {
            return $this->update();
        } else {
            return $this->insert();
        }
    }

    public function getCertificationsWithTag($filter = [], $order = [])
    {
        $this->db->select('certifications.id AS id
                            , certifications.name AS name
                            , certifications.description AS description
                            , certifications.url AS url
                            , certifications.image_filename AS image_filename
                            , certification_tags.name AS tag_name');
        $this->db->from('certifications');
        $this->db->join('certification_tags', 'certification_tags.id = certifications.certification_tag_id');
        $this->db->group_by("certifications.id");

        if(count($filter) > 0){

        }

        if(count($order) > 0){
          $this->db->order_by(implode(',', $order));
        }

        $query = $this->db->get();

        // print_r($this->db->last_query());

        return $query->result();
    }
}
