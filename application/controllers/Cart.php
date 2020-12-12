<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
    }

    //โหลดหน้า login
    public function index()
    {
        // print_r($_SESSION);
        // $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('login_view');
        $this->load->view('Home_css');
        // $this->load->view('social');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

}
