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
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
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
        $data['query2'] = $this->cart_model->showdata_all();
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart_css');
        $this->load->view('cart/show_view', $data);
        $this->load->view('card_buttom');
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


    //เพิ่ม slip เข้า tbl_savecard
    public function add_slip()
    {
        $this->cart_model->add_slip();
        redirect('cart/showfinal', 'refresh');
    }

    //โชว์ข้อมูลสินค้าเริ่มต้น
    public function mb_asus()
    {
        $data['query'] = $this->cart_model->showdata1();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function mb_msi()
    {
        $data['query'] = $this->cart_model->showdata2();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function mb_aorus()
    {
        $data['query'] = $this->cart_model->showdata3();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function mb_asrock()
    {
        $data['query'] = $this->cart_model->showdata4();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function gpu_msi_2060()
    {
        $data['query'] = $this->cart_model->showdata5();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function gpu_msi_2070()
    {
        $data['query'] = $this->cart_model->showdata6();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function gpu_aorus()
    {
        $data['query'] = $this->cart_model->showdata7();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function gpu_galax()
    {
        $data['query'] = $this->cart_model->showdata8();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function ram_kingston()
    {
        $data['query'] = $this->cart_model->showdata9();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function ram_gskill()
    {
        $data['query'] = $this->cart_model->showdata10();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function ram_corsair()
    {
        $data['query'] = $this->cart_model->showdata11();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function ram_thermal()
    {
        $data['query'] = $this->cart_model->showdata12();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function cpu_i3()
    {
        $data['query'] = $this->cart_model->showdata13();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function cpu_i5()
    {
        $data['query'] = $this->cart_model->showdata14();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function cpu_i7()
    {
        $data['query'] = $this->cart_model->showdata15();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function cpu_i9()
    {
        $data['query'] = $this->cart_model->showdata16();

        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart1_view', $data);
        $this->load->view('cart/cart_css');
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }


    //โหลดหน้าformกรอกที่อยู่
    public function address()
    {

        $m_id = $_SESSION['m_id'];
        $data['query2'] = $this->cart_model->name_final($m_id);
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart_css');
        $this->load->view('cart/address_view', $data);
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function add_address()
    {
        //   print_r($_POST);
        //   exit;
        $this->cart_model->add_ads();
        redirect('cart/tran', 'refresh');
    }



    //เลือกขนส่ง
    public function tran()
    {
        $m_id = $_SESSION['m_id'];

        $data['query2'] = $this->cart_model->name_final($m_id);
        $data['query3'] = $this->cart_model->address_more($m_id);
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/cart_css');
        $this->load->view('cart/tran_view', $data);
        $this->load->view('card_buttom');
        $this->load->view('footer');
        $this->load->view('js');
    }

    public function addtran()
    {
        //   print_r($_POST);
        //   exit;
        $this->cart_model->add_tran();
        redirect('cart/pay', 'refresh');
    }


    //เลือกวิธีการชำระเงิน
    public function pay()
    {

        $m_id = $_SESSION['m_id'];

        $data['query2'] = $this->cart_model->name_final($m_id);
        $data['query3'] = $this->cart_model->address_more($m_id);
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/pay_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

    //เลือกวิธีชำระเงิน
    public function payhome()
    {
        //    print_r($_POST);
        //   exit;
        $this->cart_model->add_payment();
        redirect('cart/showfinal', 'refresh');
    }

    //เลือกชำระผ่านธนาคาร
    public function select_paybank()
    {


        $m_id = $_SESSION['m_id'];

        $data['query2'] = $this->cart_model->name_final($m_id);
        $data['query3'] = $this->cart_model->address_more($m_id);
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/paybank_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }



    //หน้าสรุป
    public function showfinal()
    {
        $m_id = $_SESSION['m_id'];

        $data['query'] = $this->cart_model->showdata_final();
        $data['query2'] = $this->cart_model->name_final($m_id);
        $data['query3'] = $this->cart_model->by_bank();
        $data['query4'] = $this->cart_model->slip();
        $data['query5'] = $this->cart_model->address_final();
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('cart/final_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }
}
