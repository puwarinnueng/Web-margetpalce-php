    <!-- หน้าเลือกขนส่ง -->
    <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>บริการจัดส่ง</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="show_address">
                        <h1>บริการจัดส่ง</h1>
                        <hr class="style11">
                        <div class="form_show_trans">
                            <form action="<?php echo site_url('cart/addtran'); ?>" method="post">
                                <div class="transparant">
                                    <div class="transparant_kerry">
                                        <input type="checkbox" name="p_tran" value="kerry">
                                        <img src="<?php echo base_url('img/kerry.png'); ?>">
                                    </div>
                                    <div class="transparant_dhl">
                                        <input type="checkbox" name="p_tran" value="dhl">
                                        <img src="<?php echo base_url('img/dhl.png'); ?>">
                                    </div>
                                </div>

                                <table class="table-btn-address">
                                    <tr>
                                        <td><a href="<?php echo site_url('cart/address') ?>" class="btn_select"><i class="fa fa-chevron-left" aria-hidden="true"></i> ย้อนกลับ</a></td>
                                        <td><button type="submit" class="next">ดำเนินการต่อ <i class="fa fa-chevron-right" aria-hidden="true"></i></button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="result_order">
                        <h3>สรุปการสั่งซื้อ</h3>
                        <hr>
                        <div class="sum_result_order">
                            <div class="sum_result2">
                                <p>ข้อมูลลูกค้า</p>
                                <table class="table_content_sum">
                                    <tr>
                                        <td style="width: 80px;"><label>ชื่อ </label></td>
                                        <td><?php foreach ($query2 as $rs) {
                                                echo $rs->m_name;
                                            } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>อีเมล </label></td>
                                        <td><?php foreach ($query2 as $rs) {
                                                echo $rs->m_email;
                                            } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>เบอร์โทรศัพท์</label></td>
                                        <td><?php foreach ($query2 as $rs) {
                                                echo $rs->m_tel;
                                            } ?>
                                        </td>
                                    </tr>
                                </table>
                                <p>รายละเอียดการจัดส่ง</p>
                                <table class="table_content_sum2">
                                    <tr>
                                        <td ><?php foreach ($query3 as $r3) {
                                                echo $r3->p_address;
                                            } ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>