<?php
class Member_model extends CI_Model
{

    //เพิ่มข้อมูล
    public function addmember()
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
                'm_email' => $this->input->post('m_email'),
                'm_password' => $this->input->post('m_password'),
                'm_name' => $this->input->post('m_name'),
                'm_lname' => $this->input->post('m_lname'),
                'm_tel' => $this->input->post('m_tel'),
                'm_ads' => $this->input->post('m_ads'),
                'm_img' => $filename
            );

            $query = $this->db->insert('tbl_member', $data);
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

    //แก้ไขข้อมูล
    public function editmember()
    {

        $data = array(
            'm_email' => $this->input->post('m_email'),
            'm_password' => $this->input->post('m_password'),
            'm_name' => $this->input->post('m_name'),
            'm_lname' => $this->input->post('m_lname'),
            'm_tel' => $this->input->post('m_tel'),
            'm_ads' => $this->input->post('m_ads')
        );

        $this->db->where('m_id', $this->input->post('m_id'));

        $query = $this->db->update('tbl_member', $data);
        if ($query) {
            echo 'edit ok';
        } else echo 'false';
    }

    //queryข้อมูลมาแสดง
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

    //queryข้อมูลมาแสดง inner join select column
    public function showdata22()
    {
        $this->db->select('m.m_id,p.pname,m.m_email,m.m_password,m.m_img,m.m_name,m.m_lname,m.m_tel,m.m_ads,m.m_datesave,count(m.m_id) as count');
        $this->db->from('tbl_member as m');
        // $this->db->join('tbl_position as p', 'm.pid=p.pid');
        $this->db->join('tbl_position as p', 'm.pid=p.pid', 'left');
        // $this->db->where('m.pid','1');
        // $this->db->where_in('m.pid',array('1','2'));
        // $this->db->where('m.pid <= 2');
        // $this->db->order_by('m.pid','desc');
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




    //โชว์ข้อมูลก่อนแก้ไข
    public function read($m_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->where('m_id', $m_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return false;
    }

    //ลบข้อมูล
    public function deldata($m_id)
    {
        $this->db->delete('tbl_member', array('m_id' => $m_id));
    }










    // public function update_entry()
    // {
    //         $this->title    = $_POST['title'];
    //         $this->content  = $_POST['content'];
    //         $this->date     = time();

    //         $this->db->update('entries', $this, array('id' => $_POST['id']));
    // }


    // public function insert_entry()
    // {
    //         $this->title    = $_POST['title']; // please read the below note
    //         $this->content  = $_POST['content'];
    //         $this->date     = time();

    //         $this->db->insert('entries', $this);
    // }


}
