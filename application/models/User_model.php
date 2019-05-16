<?php
class User_model extends CI_Model {
    public function register($datas) {
        $datas['Password'] = md5($datas['Password'] );
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
    public function login($datas) {
        $this->db->select("*")
            ->from('users')
        ->where('Email',$datas['Email'])
        ->where('Password',md5($datas['Password']));
        $query = $this->db->get();
        return $query->result();
    }
    public function getUser($userID) {
        $this->db->select("*")
            ->from('users')
            ->where('UserID',$userID)
            ->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
}