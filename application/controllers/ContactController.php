<?php


use http\Env\Request;

defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {
    public $email;
    public $input;
    public $lang;

    public function __construct() {
        parent::__construct();
        $this->load->library("session");
        $this->load->library('user_agent');
        $this->load->library("session");
    }
    public function index()
    {
        $data['lang'] = $this->lang->load('contact','hungarian',true);
        $this->view('contact',$data);
    }
    public function send() {
         //$this->initEmail(1,2,3,4);
        $this->initEmail($this->input->post('name'),$this->input->post('email'),$this->input->post('subject'),$this->input->post('message'));
        $this->session->set_flashdata('success', 'Sikeresen elküldted');
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function initEmail($name,$from,$subject,$message) {
        $this->load->library('email');
        $this->email->from($from, $name);
        $this->email->to('pappkrisztian1310@gmail.com');
        $this->email->cc('noreply');
        $this->email->bcc('norepely');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();

    }
}
