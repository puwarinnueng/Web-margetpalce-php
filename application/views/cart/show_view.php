<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รถเข็นของคุณ</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="cart_show_order">
                    <h1>รถเข็นสินค้า</h1>
                    <hr class="style11">
                    <table class="table_show_order">
                        <thead>
                            <tr>
                                <th style="width: 100px;">รหัสสั่งซื้อ</th>
                                <th style="width: 120px;">ประเภท</th>
                                <th>ชื่อสินค้า</th>
                                <th style="width: 80px;">ราคา</th>
                                <th style="width: 40px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($query as $rs) { ?>
                                <tr>
                                    <td style="padding:0px 15px;"> <?php echo $rs->id; ?> </td>
                                    <td> <?php echo $rs->p_type; ?> </td>
                                    <td> <?php echo $rs->p_name; ?> </td>
                                    <td> <?php echo $rs->p_price; ?> </td>
                                    <td style="text-align: center;"><a href="<?php echo site_url('cart/del/') . $rs->id; ?>" onclick="return confirm('ยืนยัน')"><i class="fas fa-trash-alt"></i></td>
                                    <td><input type="hidden" value="<?php echo $rs->p_id; ?>"></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="col-md-3">
                <div class="result_order">
                    <h3>สรุปการสั่งซื้อ</h3>
                    <div class="sum_result">
                        <div class="sum_result1">
                            <label>ราคา </label>
                            <?php foreach ($query2 as $rs) {
                                echo $rs->c;
                                echo ' บาท';
                            } ?></div>
                        <hr>
                        <div class="sum_result_bold">
                            <label>ยอดสุทธิ</label>
                            <?php foreach ($query2 as $rs) {
                                echo $rs->c;
                                echo ' บาท';
                            } ?>
                        </div>
                        <p>รวมภาษีมูลค่าเพิ่ม (ถ้ามี)</p>
                    </div>
                    <form action="<?php echo site_url('cart/address'); ?>" method="post" ;>

                        <div class="btn_buy_product">
                            <button type="submit" class="btn_buy" onclick="return confirm('ยืนยันข้อมูล')">ดำเนินการสั่งซื้อ</button><br><br><br>
                            <a href="<?php echo site_url('home/index') ?>" class="btn_select"> เลือกสินค้าต่อ</a><br>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- <div class="container">
        <div class="row">


            <div class="col-md-12">
                <h4 style="text-align:center;"></h4>
                <br>
                <form action="<?php echo site_url('cart/address'); ?>" method="post" ;>

                    <div class="form-group row">
                        <div class="col-sm-3 control-label"></div>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary" onclick="return confirm('ยืนยันข้อมูล')">ชำระเงิน</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div> -->
</body>

</html>