<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if($this->session->userdata('m_level') != 4){
        //     redirect('user','refresh');
        // }   
    }


    public function index()
    {
        // print_r($_SESSION);
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('home_view');
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
        $this->load->view('card_buttom');
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
        $this->load->view('card_buttom');
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
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function how_payment()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('service/payment_view');
        $this->load->view('card_buttom');
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

    public function gpu_msi_2060()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/gpu_msi_2060');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function gpu_msi_2070()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/gpu_msi_2070');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function gpu_aorus()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/gpu_aorus');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function gpu_galax()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/gpu_galax');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function ram_kingston()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/ram_kingston');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function ram_gskill()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/ram_gskill');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function ram_corsair()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/ram_corsair');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function ram_thermal()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/ram_thermal');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function cpu_i3()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/cpu_i3');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function cpu_i5()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/cpu_i5');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function cpu_i7()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/cpu_i7');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    public function cpu_i9()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('social');
        $this->load->view('product_detail/cpu_i9');
        $this->load->view('product_detail/css_product_detail');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }
}
