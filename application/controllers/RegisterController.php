<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property  lang
 */
class RegisterController extends CI_Controller {
    private $data = [];
    public function __construct() {
        parent::__construct();
        $this->load->library("session");
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->data['lang'] = $this->lang->load('register','hungarian',true);
    }
    public function index()
    {
        $this->view('register',$this->data);
    }
    public function send() {
        $datas = $this->input->post();
        if(!$this->validate()) {
            //die(nl2br(validation_errors()));
            $errors = validation_errors();
            $this->session->set_flashdata('error', $errors);
            $this->session->set_flashdata('datas', $datas);
            redirect($_SERVER['HTTP_REFERER']);
        }
        else {
            unset($datas['PasswordAgain']);
            $this->User_model->register($datas);
            $this->session->set_flashdata('success', "Sikeres regi bazdmeg");
            redirect($_SERVER['HTTP_REFERER']);
        }

    }
    public function validate() {
        $config = array(
            array(
                'field' => 'LastName',
                'label' => 'LastName',
                'rules' => 'required',
                'errors' => array(
                'required' => 'A megadott név: %s. nem megfelelő!',
                    ),
                ),
            array(
                'field' => 'FirstName',
                'label' => 'FirstName',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott név: %s. nem megfelelő!',
                ),
            ),
            array(
                'field' => 'Email',
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required' => 'A megadott email cím: %s. nem megfelelő!',
                ),
            ),
            array(
                'field' => 'UserName',
                'label' => 'UserName',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott név: %s. nem megfelelő!',
                ),
            ),
            array(
                'field' => 'Password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott jelszó %s. nem megfelelő!',
                ),
            ),
            array(
                'field' => 'PasswordAgain',
                'label' => 'PasswordAgain',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott jelszó %s. nem megfelelő!',
                ),
            ),


        );
        $this->form_validation->set_rules($config);
        /*$this->form_validation->set_rules('LastName', 'LastName', 'required');
        $this->form_validation->set_rules('FirstName', 'FirstName', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('UserName', 'UserName', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        $this->form_validation->set_rules('PasswordAgain', 'PasswordAgain', 'required|matches[Password]');*/

        if ($this->form_validation->run() == FALSE)
        {
            return FALSE;
        }
        else {
           return TRUE;
        }
    }
}
