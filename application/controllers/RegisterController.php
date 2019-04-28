<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property  lang
 * @property  input
 */
class RegisterController extends CI_Controller {

    private $data = [];
    public $input;

    /**
     * RegisterController constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->load->library("session");
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->data['lang'] = $this->lang->load('register','hungarian',true);
    }

    /**
     * RegisterController index.
     */
    public function index() {
        return $this->view('register',$this->data);
    }

    /**
     * RegisterController send.
     */
    public function send() {
        $datas = $this->input->post();
        if(!$this->validate()) {
            $errors = validation_errors();
            $errorsClean = str_replace('</p>', '', $errors);
            $e = explode('<p>',$errorsClean);
            $this->session->set_flashdata('error', $e);
            $this->session->set_flashdata('datas', $datas);
            redirect($_SERVER['HTTP_REFERER']);
        }
        else {
            $existUser = $this->User_model->existUser($datas['Email']);
            if($existUser) {
                $this->session->set_flashdata('error', "Az email cím már létezik");
                $this->session->set_flashdata('datas', $datas);
                redirect($_SERVER['HTTP_REFERER']);
            }
            unset($datas['PasswordAgain']);
            $datas['UserIP'] = $_SERVER['REMOTE_ADDR'];
            $datas['DateTime'] = date('Y-m-d H:i:s');
            $this->User_model->register($datas);
            $this->session->set_flashdata('success', "Sikeres regisztráció");
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    /**
     * @return bool
     */
    public function validate()
    {
        $config = array(
            array(
                'field' => 'LastName',
                'label' => 'LastName',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott vezetéknév nem megfelelő!',
                ),
            ),
            array(
                'field' => 'FirstName',
                'label' => 'FirstName',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott keresztnév nem megfelelő!',
                ),
            ),
            array(
                'field' => 'Email',
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required' => 'A megadott email cím nem megfelelő!',
                    'valid_email' => 'A megadott email cím formátuma nem megfelelő!',
                ),
            ),
            array(
                'field' => 'UserName',
                'label' => 'UserName',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott felhasználónév nem megfelelő!',
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
            array(
                'field' => 'PasswordAgain',
                'label' => 'PasswordAgain',
                'rules' => 'required|matches[Password]',
                'errors' => array(
                    'required' => 'A megadott jelszó nem megfelelő!',
                    'matches' => 'A megadott jelszavak nem egyeznek!',
                ),
            ),


        );
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE)
            return FALSE;
        else
            return TRUE;
    }
}
