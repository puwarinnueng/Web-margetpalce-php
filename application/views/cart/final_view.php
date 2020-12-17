<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรุปการสั่งซื้อสินค้า</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="head_final_view">
                    <h1>คำสั่งซื้อสำเร็จ</h1>
                    <hr class="style11">
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-show-user">
                    <h3>รายละเอียดการจัดส่ง</h3>
                    <table class="table-show-user">
                        <tbody>
                            <tr>
                                <td style="width: 105px;"><label>ชื่อ</label></td>
                                <td style="width: 15px;"><label>: </label></td>
                                <td>
                                    <?php foreach ($query2 as $rb) {
                                        echo $rb->m_name;
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td><label>อีเมล</label></td>
                                <td><label>: </label></td>
                                <td>
                                    <?php foreach ($query2 as $rb) {
                                        echo $rb->m_email;
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td><label>เบอร์โทรศัพท์</label></td>
                                <td><label>: </label></td>
                                <td>
                                    <?php foreach ($query2 as $rb) {
                                        echo $rb->m_tel;
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td><label>ที่อยู่</label></td>
                                <td><label>: </label></td>
                                <td>
                                    <?php foreach ($query5 as $r3) {
                                        echo $r3->p_address;
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 90px;"><label>ขนส่งโดย</label></td>
                                <td style="width: 15px;"><label>: </label></td>
                                <td>
                                    <?php foreach ($query5 as $r3) {
                                        echo $r3->p_tran;
                                    } ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-6">
                <div class="content-show-tran">
                    <h3>วิธีการชำระเงิน</h3>
                    <table class="table-show-tran">
                        <tbody>
                            <?php foreach ($query3 as $rc) { ?>
                                <tr>
                                    <!-- <td> <?php echo $rc->id; ?> </td> -->
                                    <td>
                                        <img src="<?php echo base_url('img'); ?>/<?php echo $rc->p_payment; ?>">
                                    </td>
                                    <!-- <td>
                                        <img src="<?php echo base_url('img'); ?>/<?php echo $rc->m_img; ?>" width="50px">
                                    </td> -->

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row row2">
            <div class="col-md-12">
                <div class="content-show-product">
                    <h3>รายการสินค้า</h3>
                    <table class="table_product">
                        <thead>
                            <tr>
                                <th style="width: 100px;">รหัสสั่งซื้อ</th>
                                <th style="width: 80px;">ประเภท</th>
                                <th style="text-align: center;">ชื่อสินค้า</th>
                                <th style="width: 80px;">ราคา</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $rs) { ?>
                                <tr>
                                    <td> <?php echo $rs->id; ?> </td>
                                    <td> <?php echo $rs->p_type; ?> </td>
                                    <td> <?php echo $rs->p_name; ?> </td>
                                    <td> <?php echo $rs->p_price; ?> .-</td>
                                </tr>
                            <?php } ?>
                            <?php foreach ($query5 as $r3) { ?>
                                <tr class="tr_count">
                                    <td colspan="3">รวม</td>
                                    <td> <?php echo $r3->count; ?> .- </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row row3">
            <div class="col-md-12">
                <div class="content-upload-img">
                    <h3>กรุณาอัปโหลดสลิปโอนเงินที่นี่ (กรณีที่คุณเลือกชำระผ่านธนาคาร มิฉะนั้นการสั่งซื้อจะเป็นโมฆะ)</h3>
                    <table class="table-upload-img">
                        <tbody>
                            <tr>
                                <?php foreach ($query4 as $rd) { ?>
                                    <td>
                                        <p>รูปภาพสลิปธนาคาร</p>
                                        <img src="<?php echo base_url('img'); ?>/<?php echo $rd->m_img; ?>" width="50px">
                                    </td>
                                <?php } ?>
                                <form action="<?php echo site_url('cart/add_slip'); ?>" method="post" class="sign-in-form" enctype="multipart/form-data" ;>
                                    <td style="width: 300px;"><label for="myfile"></label><input type="file" name="m_img" accapt="image/*" class="select-img"><br>
                                        <button type="submit" class="upload">อัปโหลดสลิป</button></td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>




    <!-- <div class="container">
        <div class="row">
            <div class="" align="center">
                <br>
                <br>
                <br>
                <h4 style="text-align:center;"> สลิปโอนเงินของคุณ </h4>
                <table class="">
                    <thead>
                        <tr>
                            <th>ธนาคาร</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($query4 as $rd) { ?>
                            <tr>
                                <td> <?php echo $rc->id; ?> </td>

                                <td>
                                    <img src="<?php echo base_url('img'); ?>/<?php echo $rd->m_img; ?>" width="50px">
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div> -->



    <!-- <div class="forms_container">
        <div class="col-md-12" align="center" margin-left="500px">
            <form action="<?php echo site_url('cart/add_slip'); ?>" method="post" class="sign-in-form" enctype="multipart/form-data" ;>
                <h2 class="title">กรุณาอัปโหลดสลิปโอนเงินที่นี่(กรณีที่คุณเลือกชำระผ่านธนาคาร มิฉะนั้นการสั่งซื้อจะเป็นโมฆะ)</h2>

                <div class="update-img">
                    <label for="myfile"> </label><input type="file" name="m_img" accapt="image/*">
                </div>

                <div class="form-group row">
                    <div class="col-sm-12 control-label"></div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">อัปโหลดสลิป</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->
</body>

</html>