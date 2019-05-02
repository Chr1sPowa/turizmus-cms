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
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['lang'] = $this->lang->load('contact','hungarian',true);
        $this->view('contact',$data);
    }
    public function send()
    {
        $datas = $this->input->post();
        if (!$this->validate()) {
            $errors = validation_errors();
            $errorsClean = str_replace('</p>', '', $errors);
            $e = explode('<p>', $errorsClean);
            $this->session->set_flashdata('error', $e);
            $this->session->set_flashdata('datas', $datas);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            //$this->initEmail(1,2,3,4);
            $this->initEmail($this->input->post('name'), $this->input->post('email'), $this->input->post('subject'), $this->input->post('message'));
            $this->session->set_flashdata('success', 'Sikeresen elküldted');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    public function validate()
    {
        $config = array(
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott név nem megfelelő!',
                ),
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required' => 'A megadott email cím nem megfelelő!',
                    'valid_email' => 'A megadott email cím formátuma nem megfelelő!',
                ),
            ),
            array(
                'field' => 'subject',
                'label' => 'Subject',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott tárgy nem megfelelő!',
                ),
            ),
            array(
                'field' => 'message',
                'label' => 'Message',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott üzenet nem megfelelő!',
                ),
            ),


        );
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
            return FALSE;
        else
            return TRUE;
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
