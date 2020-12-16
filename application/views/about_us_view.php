<!-- เกี่ยวกับเรา -->
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
    <title>About Us | Com Store</title>
    <link rel="stylesheet" href="Home_view.php">

</head>

<body style="text-align:center;">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <h1 class="Head_title">เกี่ยวกับเรา</h1>
    <hr class="style1">
    <br>

    <div class="container-fluid">
        <div class="blog1">
        <br>
            <h1><b>COM STORE </b></h1>
            <br>
            <p>เราคือผู้จัดจำหน่ายคอมพิวเตอร์ <br>และอุปกรณ์ไอทีชั้นนำของประเทศไทย <br>ที่มีประสบการณ์ให้บริการมากกว่า <b>4</b> ปี </p>
        </div>
        <div class="blog2">
            <div class="the_icon">
                <img src="<?php echo base_url('img/cpu2.png'); ?>">
            </div>
        </div>
    </div>
        
    <div class="container-fluid">
        <div class="blog3">
        <br>
            <p>ทางร้านเราใส่ใจในรายละเอียด <br>และคุณภาพในการบริการอย่างมาก <br>เพื่อตอบสนองความต้องการของลูกค้า <br>และความเปลี่ยนแปลงของเทคโนโลยี</p>
        </div>
        <div class="blog4">
            <div class="the_icon">
                <img src="<?php echo base_url('img/certifie_icon.png'); ?>">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="blog5">
        <br><br>
            <p>ลูกค้าสามารถสั่งสินค้าออนไลน์ และชำระเงิน<br>ผ่านทาง E-Banking ได้ผ่านหลากหลายธนาคาร <br>อาทิ เช่น ธนาคารกรุงศรี</p>
        </div>
        <div class="blog6">
            <div class="the_icon">
                <img src="<?php echo base_url('img/online_bank_icon.png'); ?>">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="blog7">
        <br><br>
            <p>รับบริการส่งสินค้าของท่านอย่างรวดเร็ว <br> ด้วยบริการจากบริษัทขนส่งชั้นนำของประเทศอย่าง Kerry และ DHL</p>
        </div>
        <div class="blog8">
            <div class="the_icon">
                <img src="<?php echo base_url('img/deliver_truck_icon.png'); ?>">
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

    .container-fluid {
        width: 74%;
        height: 50%;
        display: table;
    }

    .blog1 {
        width: 50%;
        height: 90%;
        float: left;
        font-size: 30px;
        color: white;
        background-color: #003559;
    }

    .blog2 {
        width: 50%;
        height: 90%;
        float: right;
    }

    .blog3 {
        width: 50%;
        height: 90%;
        float: right;
        font-size: 30px;
        color: black;
        background-color: #E0EAF5;
    }

    .blog4 {
        width: 40%;
        height: 90%;
        float: left;
    }

    .blog5 {
        width: 50%;
        height: 90%;
        float: left;
        font-size: 30px;
        color: white;
        background-color: #0D2137;
    }

    .blog6 {
        width: 50%;
        height: 90%;
        float: right;
    }

    .blog7 {
        width: 50%;
        height: 90%;
        float: right;
        font-size: 30px;
        color: white;
        background-color: #FF8E2B;
    }

    .blog8 {
        width: 50%;
        height: 90%;
        float: left;
    }

    .the_icon {
        text-align: center;
        vertical-align: middle;
        display: table-cell;
    }

    .the_icon img {
        max-width: 70%;
        height: auto;
    }

    
</style>