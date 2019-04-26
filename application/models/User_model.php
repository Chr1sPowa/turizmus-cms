<?php
class User_model extends CI_Model {
    public function register($datas) {
        $this->db->insert('users', $datas);
        return $this->db->insert_id();
    }
    public function existUser($key) {
        $this->db->where('Email',$key);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0)
            return true;
        else
            return false;

    }
}