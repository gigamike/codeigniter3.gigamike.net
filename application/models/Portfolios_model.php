<?php

class Portfolios_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function getAll()
    {
        $query = $this->db->get('portfolios');
        return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('portfolios', array('id' => $id));
        return $query->row();
    }

    private function insert($portfolios)
    {
        return $this->db->insert('portfolios', $this);
    }

    private function update($portfolios)
    {
        $this->db->set('title', $this->title);
        $this->db->set('content', $this->content);
        $this->db->where('id', $this->id);
        return $this->db->update('portfolios');
    }

    public function delete()
    {
        $this->db->where('id', $this->id);
        return $this->db->delete('portfolios');
    }

    public function save()
    {
        if (isset($this->id)) {
            return $this->update();
        } else {
            return $this->insert();
        }
    }

    public function getPortfoliosWithTag($filter = [], $order = [])
    {
        $this->db->select('portfolios.id AS id
                            , portfolios.name AS name
                            , portfolios.description AS description
                            , portfolios.url AS url
                            , portfolios.image_filename AS image_filename
                            , portfolio_tags.name AS tag_name
                            , GROUP_CONCAT(stacks.name ORDER BY stacks.name) AS stacks
                            , GROUP_CONCAT(stacks.image_filename ORDER BY stacks.name) AS stacks_image_filename');
        $this->db->from('portfolios');
        $this->db->join('portfolio_tags', 'portfolio_tags.id = portfolios.portfolio_tag_id');
        $this->db->join('portfolio_stack', 'portfolio_stack.portfolio_id = portfolios.id');
        $this->db->join('stacks', 'stacks.id = portfolio_stack.stack_id');
        $this->db->group_by("portfolios.id");

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
