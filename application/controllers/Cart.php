<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model');
    }

    public function mb_asus()
    {
        $data['query'] = $this->cart_model->showdata1();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }
}
