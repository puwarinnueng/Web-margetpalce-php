<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 style="text-align:center;"> สรุป</h4>
            <table class="table table=bordered table=hover">
                <!-- <caption>    kkk</caption> -->
                <thead>
                    <tr>
                        <th>ไอดีสินค้า</th>
                        <th>เลขที่สินค้า</th>
                        <th>ประเภท</th>
                        <th>ชื่อสินค้า</th>
                        <th>ราคา</th>
                        <th>ที่อยู่จัดส่ง</th>
                        <th>ขนส่งโดย</th>
                        <th>วิธีการชำระเงิน</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $rs) { ?>
                        <tr>
                            <td> <?php echo $rs->id; ?> </td>
                            <td> <?php echo $rs->p_id; ?> </td>
                            <td> <?php echo $rs->p_type; ?> </td>
                            <td> <?php echo $rs->p_name; ?> </td>
                            <td> <?php echo $rs->p_price; ?> </td>
                            <td> <?php echo $rs->p_address; ?> </td>
                            <td> <?php echo $rs->p_tran; ?> </td>
                            <td> <?php echo $rs->p_payment; ?> </td>
                            <!-- <td><a href="<?php echo site_url('cart/del/') . $rs->id; ?>" onclick="return confirm('ยืนยัน')">ลบสินค้า</td> -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 style="text-align:center;"> ราคารวม</h4>

            <?php foreach ($query2 as $rs) {

                echo '<b>';
                echo $rs->c;
                echo 'บาท';
                echo '</b>';
            } ?>

        </div>
    </div>
</div> -->


<!-- <div class="container">
    <div class="row">


        <div class="col-md-12">
            <h4 style="text-align:center;"></h4>
            <br>
            <form action="<?php echo site_url('cart/address'); ?>" method="post";>

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
