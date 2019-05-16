<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hotel_model');
    }

    public function index()
    {
        $hotels = $this->Hotel_model->show();
        $data['lang'] = $this->lang->load('welcome', 'hungarian', true);
        $data['hotels'] = $this->Hotel_model->show();
        $this->view('hotel', $data);
    }
}
