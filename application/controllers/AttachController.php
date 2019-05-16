<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AttachController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hotel_model');
    }
    public function attach() {
        $arr = null;
        if(!isset($_SESSION['userSession'])) {
            $arr = [
                'success' => false,
                'msg' => 'Ahhoz, hogy tudjon szállást foglalni,be kell jelentkeznie!',
            ];
        }
        else {
            $arr = [
                'success' => true,
                'msg' => 'baxad neki',
            ];
        }
        echo json_encode($arr);
    }
}
