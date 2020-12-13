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

    //โชว์ข้อมูลmainboard msi
    public function showdata2()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '2');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    //โชว์ข้อมูลmainboard aorus
    public function showdata3()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '3');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    //โชว์ข้อมูลmainboard asrock
    public function showdata4()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '4');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata5()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '5');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function showdata6()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '6');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata7()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '7');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata8()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '8');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata9()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '9');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata10()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '10');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata11()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '11');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

}
