<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }

    public function index()
    {
        if(isset($_SESSION['userSession'])) redirect(base_url(''));
        $data['lang'] = $this->lang->load('login', 'hungarian', true);
        $this->view('login', $data);
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
            $loginUser = $this->User_model->login($datas);
            if(!$loginUser) {
                $this->session->set_flashdata('error', "A megadott adatok nem megfelelőek!");
                $this->session->set_flashdata('datas', $datas);
                redirect($_SERVER['HTTP_REFERER']);
            }
            else {
                $_SESSION['userSession'] = (int)$loginUser[0]->UserID;
                $this->session->set_flashdata('success', "Sikeres bejelentkezés!");
                redirect(base_url('home'));
            }
        }
    }
    public function validate()
    {
        $config = array(
            array(
                'field' => 'Email',
                'label' => 'Email',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott email cím nem megfelelő!',
                ),
            ),
            array(
                'field' => 'Password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott jelszó nem megfelelő!',
                ),
            ),
        );
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
            return FALSE;
        else
            return TRUE;
    }
    public function logout() {
        session_start();
        session_destroy();
        unset($_SESSION);
        redirect(base_url(''));
    }
}
