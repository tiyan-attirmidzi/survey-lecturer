<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_criteria extends CI_Model
{

    private $table                  = 'table_criteria';
    private $id                     = 'id';
    
    public function __construct()
    {
        parent::__construct();
    }

    public function get() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // public function getWhere($data) {
    //     $this->db->where_in('id', $data);
    //     $query = $this->db->get($this->table);
    //     return $query->result();
    // }

    public function getWhere($data) {
        $query = $this->db->where($data)->get($this->table);
        return $query->result();
    }

    public function getByDate($current_date) {
        $this->db->where('date_expire >=', $current_date);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function getLimit($current_date) {
        $this->db->where('date_expire >=', $current_date);
        $this->db->order_by('date_publish', "desc");
        $this->db->limit(3);
        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function add($data) {
        $this->db->insert($this->table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function edit($id, $data){
        //run Query to update data
        if(isset($data[$this->id]))unset($data[$this->id]);
        $query = $this->db->where('id', $id)->update($this->table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function delete($data){
        $this->db->delete($this->table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}

?>