<?php
class Cart_model extends CI_Model
{

    public function showdata1()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id','1');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata()
    {
        $query = $this->db->get('tbl_member');
        return $query->result();
    }

    //queryข้อมูลมาแสดง inner join
    public function showdata2()
    {
        $this->db->select('m.*,p.*,count(*) as count');
        $this->db->from('tbl_member as m');
        $this->db->join('tbl_position as p', 'm.pid=p.pid');
        $query = $this->db->get();
        return $query->result();
    }
  
    //queryข้อมูลมาแสดง left join
    public function showdata3()
    {
        $this->db->select('m.*,p.*');
        $this->db->from('tbl_member as m');
        $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $query = $this->db->get();
        return $query->result();
    }



 

  
}
