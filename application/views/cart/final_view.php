<br><br>
<div class="forms_container">
    <div class="col-md-12" align="center" margin-left="500px">
        <form action="<?php echo site_url('cart/add_slip'); ?>" method="post" class="sign-in-form" enctype="multipart/form-data" ;>
            <h2 class="title">กรุณาอัปโหลดสลิปโอนเงินที่นี่(กรณีที่คุณเลือกชำระผ่าธนาคาร มิฉะนั้นการสั่งซื้อจะเป็นโมฆะ)</h2>

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
</div>


<div class="container">
    <div class="row">
        <div class="" align="center">
            <br>
            <br>
            <br>
            <h4 style="text-align:center;"> สลิปโอนเงินของคุณ </h4>
            <table class="">
                <thead>
                    <tr>
                        <!-- <th>ธนาคาร</th> -->
                   
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query4 as $rd) { ?>
                        <tr>
                            <!-- <td> <?php echo $rc->id; ?> </td> -->
                                      
                            <td>
                                <img src="<?php echo base_url('img'); ?>/<?php echo $rd->m_img; ?>" width="50px">
                            </td>
                           
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
            <br>
            <br>
            <br>
            <h4 style="text-align:center;"> รายการสินค้าของคุณ </h4>
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
                        <th>สลิปโอนเงิน</th>
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
               
                            <td>
                                <img src="<?php echo base_url('img'); ?>/<?php echo $rs->p_payment; ?>" width="50px">
                            </td>
                            <td>
                                <img src="<?php echo base_url('img'); ?>/<?php echo $rs->m_img; ?>" width="50px">
                            </td>
                            <!-- <td><a href="<?php echo site_url('cart/del/') . $rs->id; ?>" onclick="return confirm('ยืนยัน')">ลบสินค้า</td> -->
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
            <h4 style="text-align:center;"> รายละเอียดจัดส่ง</h4>

            <?php foreach ($query2 as $rb) {

                echo '<b>';
                echo 'ชื่อ......';
                echo $rb->m_name;   
                echo '<br>';
                echo 'เบอร์โทร......';              
                echo $rb->m_tel;   
                echo '<br>';
                echo 'อีเมล......';              
                echo $rb->m_email;         
                echo '</b>';
            } ?>

        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="" align="center">
            <br>
            <br>
            <br>
            <h4 style="text-align:center;"> คุณชำระเงินด้วย </h4>
            <table class="table table=bordered table=hover">
                <thead>
                    <tr>
                        <!-- <th>ธนาคาร</th> -->
                   
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query3 as $rc) { ?>
                        <tr>
                            <!-- <td> <?php echo $rc->id; ?> </td> -->
                                      
                            <td>
                                <img src="<?php echo base_url('img'); ?>/<?php echo $rc->p_payment; ?>" width="50px">
                            </td>
                           
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

