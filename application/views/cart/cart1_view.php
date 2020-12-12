<br><br>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 style="text-align:center;"> ยืนยันการเลือกสินค้า</h4>
                <table class="table table=bordered table=hover">
                    <!-- <caption>    kkk</caption> -->
                    <thead>
                        <tr>
                            <th>เลขที่สินค้า</th>
                            <th>รูปสินค้า</th>
                            <th>ประเภท</th>
                            <th>ชื่อสินค้า</th>
                            <th>ราคา</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($query as $rs) { ?>
                            <tr>
                                <td> <?php echo $rs->p_id; ?> </td>
                                <td>
                                    <img src="<?php echo base_url('img'); ?>/<?php echo $rs->p_img; ?>" width="50px">
                                </td>
                                <td> <?php echo $rs->p_type; ?> </td>
                                <td> <?php echo $rs->p_name; ?> </td>
                                <td> <?php echo $rs->p_price; ?> </td>

                                <!-- <td> <?php echo $rs->m_lname; ?> </td> -->
                                <!-- <td> <?php echo $rs->m_tel; ?> </td>
                                <td> <?php echo $rs->m_ads; ?> </td>
                                <td> <?php echo $rs->m_datesave; ?> </td>
                                <td> <?php echo $rs->count; ?> </td> -->
                                <td><a href="<?php echo site_url('insertdata/edit/') . $rs->p_id; ?>">เพิ่มเข้ารถเข็น</td>
                                <!-- <td><a href="<?php echo site_url('insertdata/del/') . $rs->p_id; ?>" onclick="return confirm('ยืนยัน')">ลบสินค้า</td> -->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>