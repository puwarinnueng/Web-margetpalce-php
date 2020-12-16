<!-- วิธีการชำระเงินและแจ้งชำระเงิน -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<style>
    body {
        background-color: whitesmoke;
    }
</style>

<head>
    <meta charset="utf-8">
    <title>วิธีการชำระเงินและแจ้งชำระเงิน</title>
    <link rel="stylesheet" href="Home_view.php">

</head>


<body style="text-align:center;">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <h1 class="Head_title">วิธีการชำระเงินและเเจ้งการชำระเงิน</h1>
    <hr class="style1">

    <div class="container">
    <div class="how_to_pay">
        <br>
        <h2>หลังจากยืนยันการสั่งซื้อสินค้าแล้ว ก็เลือกระหว่างชำระเงินปลาย หรือชำระผ่านบัญชีธนาคาร</h2>
        <br>
        <img src="<?php echo base_url('img/buying_step8.jpg'); ?>">
        <br><br><br>
        <h3><a href="<?php echo site_url('home/how_order'); ?>">ดูวิธีการสั่งซื้อสินค้าออนไลน์</a></h3><br><br>

        <div class="pay_by_bank">
            <h1 class="step_head"><b>กรณีชำระผ่านบัญชีธนาคาร</b></h1>
            <br>
            <h2>เมื่อเลือกชำระผ่านบัญชีธนาคาร ก็จะให้เลือกธนาคารตามไอคอนโลโก้
                <br> และกดปุ่ม "ตกลงการสั่งซื้อ"
            </h2>
            <br>
            <img src="<?php echo base_url('img/payment_bank1.jpg'); ?>">
            <br><br><br><br>

            <h2>จากนั้นจะขึ้นหน้าสรุปคำสั่งซื้อทั้งหมด ให้ [1] แนบสลิปโอนเงินให้เรียบร้อย <br>จากนั้นจึงกดปุ่ม [2] "อัปโหลดสลิป"</h2>
            <br>
            <img src="<?php echo base_url('img/payment_bank1.jpg'); ?>">
            <br><br><br><br>
        </div>

        <div class="pay_on_delivery">
            <h1 class="step_head"><b>กรณีชำระเงินปลายทาง</b></h1>
            <br>
            <h2>หากเลือกชำระเงินปลายทาง จะถูกนำมาที่หน้าสรุปคำสั่งซื้อเลย <br>โดยให้กดปุ่ม "อัปโหลดสลิป" <b>โดยที่ไม่ต้องแนบสลิปมาด้วย</b></h2>
            <br>
            <img src="<?php echo base_url('img/payment_bank1.jpg'); ?>">
            <br><br><br><br>
        </div>

    </div>
    </div>

</body>

</html>

<style>
    body {
        margin: 0;
        padding: 0;
        height: 100hv;
        align-items: center;
        align-content: center;
        font-family: 'Prompt', sans-serif;
    }

    img {
        max-width: 85%;
        height: auto;
        box-shadow: 10px 10px 5px #0D2137;
        -moz-box-shadow: 10px 10px 5px #0D2137;
        -webkit-box-shadow: 10px 10px 5px #0D2137;
        -khtml-box-shadow: 10px 10px 5px #0D2137;
    }
    
    .how_to_pay {
        background-color: #E0EAF5;
    }
</style>