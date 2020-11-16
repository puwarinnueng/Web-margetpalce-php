<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {



        $this->load->view('navbar2');
        $this->load->view('css');
        $this->load->view('home_view');
        $this->load->view('js');
        $this->load->view('footer');
    }

    public function group_mb()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('group/mainboard');
        $this->load->view('js');
    }

    public function asus()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('product_detail/mb_asus');
        $this->load->view('js');
    }
}
