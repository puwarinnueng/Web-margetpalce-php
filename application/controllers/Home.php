<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('home_view');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');


    }

    public function about_us()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('about_us_view');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function sevenday()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('warranty/sevenday_view');
        $this->load->view('js');
        $this->load->view('footer');
    }

    public function wardetail()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('warranty/wardetail_view');
        $this->load->view('js');
        $this->load->view('footer');
    }

    public function how_order()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('service/order_view');
        $this->load->view('js');
        $this->load->view('footer');
    }

    public function how_payment()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('service/payment_view');
        $this->load->view('js');
        $this->load->view('footer');
    }

    public function group_mb()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('group/mainboard');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function group_gpu()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('group/gpu');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function group_cpu()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('group/cpu');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function group_ram()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('group/ram');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function mb_asus()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/mb_asus');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function mb_msi()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/mb_msi');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function mb_aorus()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/mb_aorus');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function mb_asrock()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/mb_asrock');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }
}
