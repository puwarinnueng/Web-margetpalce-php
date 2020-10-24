    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 style="text-align:left;"> แสดงรายชื่อสมาชิก</h4>
                <table class="table table=bordered table=hover">
                    <!-- <caption>    kkk</caption> -->
                    <thead>
                        <tr>
                            <th>เลขที่ผู้ใช้</th>
                            <th>ตำแหน่ง</th>
                            <th>รูปภาพ</th>
                            <th>ชื่อ</th>
                            <th>อีเมล</th>
                            <th>รหัสผ่าน</th>
                            <th>สกุล</th>
                            <th>เบอร์โทร</th>
                            <th>ที่อยู่</th>
                            <th>วันที่บันทึก</th>
                            <th>จำนวน</th>
                            <th>แก้ไข</th>
                            <th>ลบข้อมูล</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($query as $rs) { ?>
                            <tr>
                                <td> <?php echo $rs->m_id; ?> </td>
                                <td> <?php echo $rs->pname; ?> </td>
                                <td>
                                    <img src="<?php echo base_url('img'); ?>/<?php echo $rs->m_img; ?>" width="50px">
                                </td>
                                <td> <?php echo $rs->m_email; ?> </td>
                                <td> <?php echo $rs->m_password; ?> </td>
                                <td> <?php echo $rs->m_name; ?> </td>
                                <td> <?php echo $rs->m_lname; ?> </td>
                                <td> <?php echo $rs->m_tel; ?> </td>
                                <td> <?php echo $rs->m_ads; ?> </td>
                                <td> <?php echo $rs->m_datesave; ?> </td>
                                <td> <?php echo $rs->count; ?> </td>
                                <td><a href="<?php echo site_url('insertdata/edit/') . $rs->m_id; ?>">edit</td>
                                <td><a href="<?php echo site_url('insertdata/del/') . $rs->m_id; ?>" onclick="return confirm('ยืนยัน')">delete</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>