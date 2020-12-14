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

    //เพิ่ม ภาพ เข้า savecard
    public function add_slip()
    {
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '3000';
        $config['max_height'] = '3000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('m_img')) {
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();

            $filename = $data['file_name'];



            //เพิ่มข้อมูลเข้าระบบปกติ
            $data = array(
                // 'm_email' => $this->input->post('m_email'),
                // 'm_password' => $this->input->post('m_password'),
                // 'm_name' => $this->input->post('m_name'),
                // 'm_lname' => $this->input->post('m_lname'),
                // 'm_tel' => $this->input->post('m_tel'),
                // 'm_ads' => $this->input->post('m_ads'),
                'm_img' => $filename
            );

            $query = $this->db->update('tbl_savecart', $data);
            if ($query) {
                echo 'add ok';
            } else {
                echo 'false';
            }

            // echo 'pre';
            // print_r($_POST);
            // echo '</pre>';
        }
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

    //เพิ่มข้อมูลที่อยู่ tbl_savecard
    public function add_ads()
    {

        $data = array(
            'p_address' => $this->input->post('p_address'),

        );

        //   $this->db->where('p_user', $this->input->post('p_user'));

        $query = $this->db->update('tbl_savecart', $data);
        // if ($query) {
        //     echo ' ok';
        // } else echo 'false';
    }

    //เพิ่มข้อมูลขนส่ง tbl_savecard
    public function add_tran()
    {

        $data = array(

            'p_tran' => $this->input->post('p_tran'),


        );

        $query = $this->db->update('tbl_savecart', $data);
        // if ($query) {
        //     echo ' ok';
        // } else echo 'false';
    }

     //เพิ่มวิธีชำระเงิน tbl_savecard
     public function add_payment()
     {
 
         $data = array(
 
             'p_payment' => $this->input->post('p_payment'),
 
 
         );
 
         $query = $this->db->update('tbl_savecart', $data);
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

    //หน้ารถเข็น ราคารวม
    public function showdata_all()
    {
        $this->db->select('sum(p_price) as c');
        $this->db->from('tbl_savecart');
        $query2 = $this->db->get();
        return $query2->result();
        // ,count(p_price) as count
    }

     //หน้าสรุปสุดท้าย
     public function showdata_final()
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

    public function showdata12()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '12');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata13()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '13');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata14()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '14');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata15()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '15');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function showdata16()
    {
        $this->db->select('*');
        $this->db->from('tbl_cart');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        $this->db->where('p_id', '16');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
        $query = $this->db->get();
        return $query->result();
    }

    //queryชื่อหน้า final
    public function name_final($m_id)
    {
        // $this->db->select('*');
        // $this->db->from('tbl_member');
        // $this->db->where('m_id', $m_id);
        // $query2 = $this->db->get();
        // if ($query2->num_rows() > 0) {
        //     $query2 = $query2->row();
        //     return $query2;
        // }
        // return false;


        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->where('m_id', $m_id);
        $query2 = $this->db->get();
        return $query2->result();
    }

    public function by_bank()
    {
        $this->db->select('*,count(p_id) as p');
        $this->db->from('tbl_savecart');
        // $this->db->where('m_id', $m_id);
        $query3 = $this->db->get();
        return $query3->result();
        // limit = 1;
    }

    public function slip()
    {
        $this->db->select('*,count(p_id) as p');
        $this->db->from('tbl_savecart');
        // $this->db->where('m_id', $m_id);
        $query3 = $this->db->get();
        return $query3->result();
        // limit = 1;
    }


}
