<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model');
    }

    //query ข้อมูลของสินค้าโดยเอา Search ที่ได้จาก Search Box ไปใส่ใน where ใช้ or เทียบกับคอลัม p_name และ p_type
    public function search_product()
    {
        $query = $this->db->query("select * from tbl_cart where p_name='" . $_POST['searchs'] . "' or p_type='" . $_POST['searchs'] . "'");
        $row = $query->row_array();
        if (count($row) > 0) {
            $data['query'] = $this->cart_model->searching($_POST['searchs']);
            $this->load->view('navbar');
            $this->load->view('css');
            $this->load->view('Home_css');
            $this->load->view('social');
            $this->load->view('search/search_result', $data);
            $this->load->view('js');
            $this->load->view('card_buttom');
            $this->load->view('footer');
        } else {
            redirect('search/noresult');
        }
    }

    public function noresult()
    {
        $this->load->view('navbar');
        $this->load->view('css');
        $this->load->view('Home_css');
        $this->load->view('social');
        $this->load->view('search/search_noresult');
        $this->load->view('js');
        $this->load->view('card_buttom');
        $this->load->view('footer');
    }
}
