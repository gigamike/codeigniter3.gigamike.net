<?php

class Certification_tags_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function getAll()
    {
        $query = $this->db->get('certification_tags');
        return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('certification_tags', array('id' => $id));
        return $query->row();
    }

    private function insert($certification_tags)
    {
        return $this->db->insert('certification_tags', $this);
    }

    private function update($certification_tags)
    {
        $this->db->set('title', $this->title);
        $this->db->set('content', $this->content);
        $this->db->where('id', $this->id);
        return $this->db->update('certification_tags');
    }

    public function delete()
    {
        $this->db->where('id', $this->id);
        return $this->db->delete('certification_tags');
    }

    public function save()
    {
        if (isset($this->id)) {
            return $this->update();
        } else {
            return $this->insert();
        }
    }
}
