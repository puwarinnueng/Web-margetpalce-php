<?php
class Cart_model extends CI_Model
{
    //อ่านข้อมูลมาแสดงหน้าformยืนยันสินค้า
    public function read($p_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        $this->db->where('p_id', $p_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return false;
    }

    //เพิ่มข้อมูลเข้า tbl_savecard
    public function addtocard()
    {

        $data = array(
            'p_id' => $this->input->post('p_id'),
            'p_type' => $this->input->post('p_type'),
            'p_name' => $this->input->post('p_name'),
            'p_price' => $this->input->post('p_price'),
        );

        $this->db->where('p_id', $this->input->post('p_id'));

        $query = $this->db->insert('tbl_savecart', $data);
        if ($query) {
            echo ' ok';
        } else echo 'false';
    }

    //หน้ารถเข็น
    public function showdata()
    {
        $this->db->select('*');
        $this->db->from('tbl_savecart');
        $query = $this->db->get();
        return $query->result();
        // ,count(p_price) as count
    }

    //ลบข้อมูล
    public function deldata($id)
    {
        $this->db->delete('tbl_savecart', array('id' => $id));
    }

    //โชว์ข้อมูลmainboard asus
    public function showdata1()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '1');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }
}
