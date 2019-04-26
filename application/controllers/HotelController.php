<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HotelController extends CI_Controller {
    public function index()
    {
        $this->view('hotel');
    }
}
