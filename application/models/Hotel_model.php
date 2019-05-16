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
    public function searchName($datas) {
        $this->db->select("*")
            ->from('hotel')
            ->join('varos', 'hotel.CityID = varos.id')
            ->like('hotel.NameofHotel',$datas['name'],'both')
            ->or_where('varos.kisterseg',$datas['region']);
        $query = $this->db->get();
        $e = $query->result();
        return $this->search($e);
    }
    public function search($e){
        $data[] = NULL;
        foreach($e as $a) {
            $data[] = $a->HotelID;
        }
        $this->db->select("*,SUM(user_hotel_votes.NumofStars) as NumofStarsAll,count(user_hotel_votes.HotelID) as NumofStarsMember")
            ->from('hotel')
            ->join('hotel_profiles', 'hotel.HotelID = hotel_profiles.HotelID')
            ->join('images', 'hotel.ImageID = images.ImageID')
            ->join('user_hotel_votes', 'hotel.HotelID = user_hotel_votes.HotelID')
            ->join('varos', 'hotel.CityID = varos.id')
            ->join('prices', 'prices.PriceID = hotel.PriceID')
            ->where_in('hotel.HotelID',$data);
        $this->db->group_by("hotel.NameofHotel");
        $query = $this->db->get();
        return $query->result();
    }
    public function allRegion() {
        $this->db->select("*")
            ->from('varos');
        $query = $this->db->get();
        return $query->result();
    }
    public function getPrice() {
        $this->db->select("*")
            ->from('hotel')
        ->join('prices', 'prices.PriceID = hotel.PriceID');
        $query = $this->db->get();
        return $query->result();
    }
    public function booking($datas) {
        $datas['UserID'] = $_SESSION['userSession'];
        $this->db->insert('bookings', $datas);
        return $this->db->insert_id();
    }
    public function existBooking($key) {
        $this->db->where('HotelID',$key)
        ->where('UserID',$_SESSION['userSession']);
        $query = $this->db->get('bookings');
        if ($query->num_rows() > 0)
            return true;
        else
            return false;
    }
    public function getAllBookings() {
        $this->db->select("*")
            ->from('bookings')
            ->where('UserID',$_SESSION['userSession'])
            ->join('hotel', 'hotel.HotelID = bookings.HotelID')
            ->join('hotel_profiles', 'hotel.HotelID = hotel_profiles.HotelID')
            ->join('images', 'hotel.ImageID = images.ImageID');
        $query = $this->db->get();
        return $query->result();
    }
    public function delete($bookingID) {
        //$this->db->delete('bookings', array('UserID' => $_SESSION['userSession'],'HotelID' => $hotelID));
        $this->db->delete('bookings', array('BookingID' => $bookingID));
        return $this->db->affected_rows();
    }
}