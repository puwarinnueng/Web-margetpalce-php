<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 style="text-align:center;"> ตะกร้าสินค้าของคุณ</h4>
            <table class="table table=bordered table=hover">
                <!-- <caption>    kkk</caption> -->
                <thead>
                    <tr>
                        <th>ไอดีสินค้า</th>
                        <th>เลขที่สินค้า</th>
                        <th>ประเภท</th>
                        <th>ชื่อสินค้า</th>
                        <th>ราคา</th>
                        <!-- <th>รวม</th> -->

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
                            <!-- <td> <?php echo $rs->c; ?> </td> -->
                            <td><a href="<?php echo site_url('cart/del/') . $rs->id; ?>" onclick="return confirm('ยืนยัน')">ลบสินค้า</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<div class="container">
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
</div>