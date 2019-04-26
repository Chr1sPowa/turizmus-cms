<?php
class User_model extends CI_Model {
    //egészísd ki egy DateTime UserIP
    //DateTime => datetime
    //UserIP = varchar(255)
    //ellenőrizze hogy létezik e már a felhasználó avagy nem
    public function register($datas) {
        $this->db->insert('users', $datas);
        return $this->db->insert_id();
    }
}