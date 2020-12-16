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
        $query = $this->db->query("select * from tbl_cart where p_name like '%" . $_POST['searchs'] . "%' or p_type like '%" . $_POST['searchs'] . "%'");
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

    //พอไม่พบสินค้า จะ redirect มาหน้านี้
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

    //รับค่า p_id มาจาก view search_result เพื่อเอาไปหา product_detail ของ p_id นั้น
    public function search_product_detail() 
    {
        $productID = $_POST['prod_id'];
        if ($productID == 1) redirect('home/mb_asus');
        else if ($productID == 2) redirect('home/mb_msi');
        else if ($productID == 3) redirect('home/mb_aorus');
        else if ($productID == 4) redirect('home/mb_asrock');
        else if ($productID == 5) redirect('home/gpu_msi_2060');
        else if ($productID == 6) redirect('home/gpu_msi_2070');
        else if ($productID == 7) redirect('home/gpu_aorus');
        else if ($productID == 8) redirect('home/gpu_galax');
        else if ($productID == 9) redirect('home/ram_kingston');
        else if ($productID == 10) redirect('home/ram_gskill');
        else if ($productID == 11) redirect('home/ram_corsair');
        else if ($productID == 12) redirect('home/ram_thermal');
        else if ($productID == 13) redirect('home/cpu_i3');
        else if ($productID == 14) redirect('home/cpu_i5');
        else if ($productID == 15) redirect('home/cpu_i7');
        else if ($productID == 16) redirect('home/cpu_i9');
    }

    //รับค่า p_id มาจาก view search_result เพื่อเอาไปหา cart ของ p_id นั้น
    public function search_product_cart() 
    {
        $productID = $_POST['prod_id'];
        if ($productID == 1) redirect('cart/mb_asus');
        else if ($productID == 2) redirect('cart/mb_msi');
        else if ($productID == 3) redirect('cart/mb_aorus');
        else if ($productID == 4) redirect('cart/mb_asrock');
        else if ($productID == 5) redirect('cart/gpu_msi_2060');
        else if ($productID == 6) redirect('cart/gpu_msi_2070');
        else if ($productID == 7) redirect('cart/gpu_aorus');
        else if ($productID == 8) redirect('cart/gpu_galax');
        else if ($productID == 9) redirect('cart/ram_kingston');
        else if ($productID == 10) redirect('cart/ram_gskill');
        else if ($productID == 11) redirect('cart/ram_corsair');
        else if ($productID == 12) redirect('cart/ram_thermal');
        else if ($productID == 13) redirect('cart/cpu_i3');
        else if ($productID == 14) redirect('cart/cpu_i5');
        else if ($productID == 15) redirect('cart/cpu_i7');
        else if ($productID == 16) redirect('cart/cpu_i9');
    }

}
