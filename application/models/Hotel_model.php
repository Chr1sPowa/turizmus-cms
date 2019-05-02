<?php
class Hotel_model extends CI_Model {
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
    public function show(){
        $this->db->select("*,SUM(user_hotel_votes.NumofStars) as NumofStarsAll,count(user_hotel_votes.HotelID) as NumofStarsMember")
            ->from('hotel')
            ->join('hotel_profiles', 'hotel.HotelID = hotel_profiles.HotelID')
            ->join('images', 'hotel.ImageID = images.ImageID')
            ->join('user_hotel_votes', 'hotel.HotelID = user_hotel_votes.HotelID')
            ->join('varos', 'hotel.CityID = varos.id')
            ->join('prices', 'prices.PriceID = hotel.PriceID');
        $this->db->group_by("hotel.NameofHotel");
        $query = $this->db->get();
        return $query->result();
    }
}