<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {
    public function index()
    {
        $this->view('register');
    }
}
