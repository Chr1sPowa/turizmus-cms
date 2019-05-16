<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->library('form_validation');
        $this->load->model('Hotel_model');
    }

    public function send() {
        $datas = $this->input->post();
        $datas['name'] = (!isset($datas['name']) || $datas['name'] == "") ? "none" : $datas['name'];
        $datas['region'] = (!isset($datas['region']) || $datas['region'] == "") ? "none" : $datas['region'];
        $hotels = $this->Hotel_model->searchName($datas);
        if($hotels[0]->HotelID !== NULL) {
            //var_dump($datas);
            //var_dump($hotels);
           //die("search");
            $this->session->set_flashdata('hotels', $hotels);
            redirect(base_url('hotels'));
        }
        redirect(base_url('hotels'));
        //var_dump($hotels);
        //var_dump($datas);
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
                'field' => 'region',
                'label' => 'Region',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'A megadott kistérség nem megfelelő!',
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
