<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hotel_model');
    }
    public function index() {
        if(!isset($_SESSION['userSession']))
            redirect(base_url('/'));

        //$hotels = $this->Hotel_model->show();
        //$region = $this->Hotel_model->allRegion();
        $data['lang'] = $this->lang->load('welcome','hungarian',true);
        $data['hotels'] = $this->Hotel_model->show();
        $data['regions'] = $this->Hotel_model->allRegion();
        $this->view('home',$data);
    }
    public function bookings() {
        if(!isset($_SESSION['userSession']))
            redirect(base_url('/'));

        $data['lang'] = $this->lang->load('booking','hungarian',true);
        $data['getAllBookings'] = $this->Hotel_model->getAllBookings();
        $this->view('bookings',$data);
        //asdasdasd
    }
    public function delete() {
        $datas = $this->input->get();
        if(!isset($_SESSION['userSession']))
            redirect(base_url('/'));

        $delete = $this->Hotel_model->delete($datas['bookingID']);
        if($delete > 0) {
            $arr = [
                'success' => true,
                'msg' => 'Sikeres törlés!',
            ];
        }
        else {
            $arr = [
                'success' => false,
                'msg' => 'Sikertelen törlés!',
            ];
        }
        echo json_encode($arr);
    }
}
