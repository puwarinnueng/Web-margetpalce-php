<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model');
    }

    //query ข้อมูลของสินค้ามาใส่ใน form
    public function show_data($p_id)
    {
        $data['rsedit'] = $this->cart_model->read($p_id);

        // print_r($data);
        // exit;


        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart2_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

    //add ข้อมูลสินค้าเข้า tbl_savecart
    public function data()
    {
        //   print_r($_POST);
        //   exit;
        $this->cart_model->addtocard();
        redirect('cart/showcart', 'refresh');
    }

    //หน้ารถเข็น
    public function showcart()
    {
        $data['query'] = $this->cart_model->showdata();
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/show_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

    //เรียกใช้ model ลบข้อมูล
    public function del($id)
    {
        //   print_r($_POST);
        $this->cart_model->deldata($id);
        redirect('cart/showcart', 'refresh');
    }

    //โชว์ข้อมูลสินค้าเริ่มต้น
    public function mb_asus()
    {
        $data['query'] = $this->cart_model->showdata1();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function mb_msi()
    {
        $data['query'] = $this->cart_model->showdata2();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

        public function mb_aorus()
    {
        $data['query'] = $this->cart_model->showdata3();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function mb_asrock()
    {
        $data['query'] = $this->cart_model->showdata4();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function gpu_msi_2060()
    {
        $data['query'] = $this->cart_model->showdata5();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function gpu_msi_2070()
    {
        $data['query'] = $this->cart_model->showdata6();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function gpu_aorus()
    {
        $data['query'] = $this->cart_model->showdata7();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function gpu_galax()
    {
        $data['query'] = $this->cart_model->showdata8();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }


}
