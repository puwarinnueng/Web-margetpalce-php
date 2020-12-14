<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insertdata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
    }

    //โหลดหน้าสมัครสมาชิก
    public function index()
    {
        // $data['query'] = $this->member_model->showdata22();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';


        // exit;
        $this->load->view('insert_view');
        $this->load->view('login&regis_css');
    }

    //อ่าน table เพื่อแสดงออกมาแก้ไข
    public function edit($m_id)
    {
        $data['rsedit'] = $this->member_model->read($m_id);

        // print_r($data);
        // exit;
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('edit_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }

    //เรียกใช้ model เพิ่มข้อมูล
    public function adding()
    {
        $this->member_model->addmember();
        redirect('user', 'refresh');
    }

    //เรียกใช้ model เพื่อสั่งแก้ไขข้อมูล
    public function editdata()
    {
        //   print_r($_POST);
        $this->member_model->editmember();
        redirect('user/profile', 'refresh');
    }

    //เรียกใช้ model ลบข้อมูล
    public function del($m_id)
    {
        //   print_r($_POST);
        $this->member_model->deldata($m_id);
        redirect('insertdata/showmember', 'refresh');
    }

    //โชว์ข้อมูลสมาชิก
    public function showmember()
    {
        $data['query'] = $this->member_model->showdata22();



        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('member_view', $data);
        $this->load->view('footer');
        $this->load->view('js');
    }




}
