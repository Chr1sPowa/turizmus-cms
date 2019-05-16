<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model('Hotel_model');
        $this->load->library('form_validation');
    }
    public function index() {
        $datas = $this->input->get();
        if($datas['ChildrenNum'] == "" || $datas['NumOfDays'] == "" || $datas['AdultNum'] == "") {
            echo json_encode([
                "success" => false,
                "msg" => 'Minden mező kitöltése kötelező!',
            ]);
        } else {
            $existBooking = $this->Hotel_model->existBooking($datas['HotelID']);
            if($existBooking) {
                echo json_encode([
                    "success" => false,
                    "msg" => 'Erre a hotelre már történt egy foglalás!',
                ]);
                return;
            }
            $booking = $this->Hotel_model->booking($datas);
            if($booking) {
                echo json_encode([
                    "success" => true,
                    "msg" => 'Sikeres szállás foglalás!',
                ]);
            }
        }
    }
    public function calculate() {
        $allPrice = [];
        $datas = $this->input->get();
        $price = $this->Hotel_model->getPrice();
        $adultPrice = (int)$datas['AdultNum'] * $price[0]->AdultPrice;
        $childrenPrice = (int)$datas['ChildrenNum'] * $price[0]->ChildrenPrice;
        echo json_encode([
            'success' => true,
            'childPriceAll' => $childrenPrice,
            'adultPriceAll' => $adultPrice,
        ]);
    }
}
