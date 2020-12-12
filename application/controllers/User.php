<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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

    // public function check()
    // {
    //     //รับค่ามาจาก form login
    //     // echo '<pre>';
    //     // print_r($_POST);
    //     // echo '</pre>';
    //     // exit;
    //     $m_email = $this->input->post('m_email');
    //     $m_password = $this->input->post('m_password');

    //     // echo 'email =' . $m_email;
    //     // echo '<br>';
    //     // echo 'pass =' . $m_password;
    //     // exit;

    //     if ($m_email == 'admin' && $m_password == 'admin') {
    //         //   echo 'ok';
    //         //ชื่อ       //ค่า
    //         $this->session->set_userdata('level', 'admin');
    //         // print_r($_SESSION);
    //         redirect('home', 'refresh');
    //     } else {
    //         echo 'false';
    //     }
    // }


    //check การ login
    public function check2()
    {
        if ($this->input->post('m_email') == '') {
            $this->load->view('user');
        } else {
            // echo '<pre>';
            // print_r($this->input->post());
            // echo '</pre>';
            // exit;
            $result = $this->member_model->fetch_user_login(
                $this->input->post('m_email'),
                // sha1($this->input->post('m_password'))
                $this->input->post('m_password')
            );

            // print_r($result);
            // exit;

            if (!empty($result)) {
                $sess = array(
                    'm_id'    => $result->m_id,
                    'm_email'  => $result->m_email,
                    'm_name'  => $result->m_name,
                    'm_ads'  => $result->m_ads,

                    // 'm_level'  =>$result->pid,
                );
                // echo '<br>';
                // print_r($sess);
                // exit;
                $this->session->set_userdata($sess);

                // echo '<br>';
                // print_r($_SESSION);
                // // //แบ่งคนที่login เป็นระดับ

                // $m_level = $_SESSION['m_level'];
                // // echo 'level'.$m_level;
                // echo '<hr>';
                // if($m_level==4){
                //     // echo 'user';
                //     redirect('home','refresh');
                // }
                //else if

                redirect('home', 'refresh');
            } else {
                $this->session->unset_userdata(array('m_id', 'm_email', 'm_name', 'm_ads'));
                //    echo 'อะไรผิด';
                redirect('user', 'refresh');
                // echo 'อะไรผิด';
            }
        }
    }



    public function logout()
    {
        $this->session->unset_userdata(array('m_id', 'm_email', 'm_name', 'm_ads'));
        redirect('user', 'refresh');
    }


    //ลืมรหัสผ่าน
    public function forgotpass()
    {
        $this->load->view('css');
        $this->load->view('forgotpass_view');
        $this->load->view('Home_css');
        // $this->load->view('social');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }

    //query ข้อมูลจากemail ที่ลืมรหัสผ่าน
    public function wantlogin()
    {
        $query = $this->db->query("select * from tbl_member where m_email='" . $_POST['m_email'] . "'");
        // $result = $query->result();
        $row = $query->row_array();
        if (count($row) > 0) {
            $data['query'] = $this->member_model->querylogin($_POST['m_email']);
            $this->load->view('css');
            $this->load->view('Home_css');
            $this->load->view('js');
            $this->load->view('forgotok_view', $data);
            $this->load->view('css');
        } else {
            echo "fail";
            // exit;
            redirect('user/forgotpass');
        }
    }

    //แก้ไขโปรไฟล์แบบ2
    public function profile()
    {

        $m_id = $_SESSION['m_id'];
        // echo $m_id;
        // echo '<br>';
        // print_r($_SESSION);
        // exit;
        $data['rsedit'] = $this->member_model->read($m_id);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('profile/profile_view' ,$data);
        $this->load->view('Home_css');
        $this->load->view('js');
        $this->load->view('footer');
    }
}
