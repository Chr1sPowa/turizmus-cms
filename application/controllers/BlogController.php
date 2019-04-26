<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller {
    public function index()
    {
        $this->view('blog');
    }
}
