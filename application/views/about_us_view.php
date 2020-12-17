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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | Com Store</title>
    <link rel="stylesheet" href="Home_view.php">

</head>

<body style="text-align:center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="Head_title">เกี่ยวกับเรา</h1>
                <hr class="style1">
                <div class="container-content">
                    <div class="container-fluid">
                        <div class="blog1">
                            <div class="content-abount-us">
                                <h1><b>COM STORE </b></h1>
                                <br>
                                <p>เราคือผู้จัดจำหน่ายคอมพิวเตอร์ <br>และอุปกรณ์ไอทีชั้นนำของประเทศไทย <br>ที่มีประสบการณ์ให้บริการมากกว่า <b>4</b> ปี </p>
                            </div>
                        </div>
                        <div class="blog2">
                            <div class="the_icon">
                                <img src="<?php echo base_url('img/logo2.gif'); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="blog3">
                            <div class="content-abount-us">
                                <p>ทางร้านเราใส่ใจในรายละเอียด <br>และคุณภาพในการบริการอย่างมาก <br>เพื่อตอบสนองความต้องการของลูกค้า <br>และความเปลี่ยนแปลงของเทคโนโลยี</p>
                            </div>
                        </div>
                        <div class="blog4">
                            <div class="the_icon">
                                <img src="<?php echo base_url('img/certifie_icon.png'); ?>">
                            </div>
                        </div>
                    </div>


                    <div class="container-fluid">
                        <div class="blog5">
                            <div class="content-abount-us">
                                <p>ลูกค้าสามารถสั่งสินค้าออนไลน์ และชำระเงิน<br>ผ่านทาง E-Banking ได้ผ่านหลากหลายธนาคาร <br>อาทิ เช่น ธนาคารกรุงศรี</p>
                            </div>
                        </div>
                        <div class="blog6">
                            <div class="the_icon">
                                <img src="<?php echo base_url('img/online_bank_icon.png'); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="blog7">
                            <div class="content-abount-us">
                                <p>รับบริการส่งสินค้าของท่านอย่างรวดเร็ว <br> ด้วยบริการจากบริษัทขนส่งชั้นนำของประเทศอย่าง Kerry และ DHL</p>
                            </div>
                        </div>
                        <div class="blog8">
                            <div class="the_icon">
                                <img src="<?php echo base_url('img/deliver_truck_icon.png'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
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

    .container-content {
        margin-top: 3%;
        font-family: 'Prompt', sans-serif;
    }

    .content-abount-us {
        margin-top: 20%;
    }

    .container-fluid {
        width: 100%;
        display: table;

    }

    .blog1 {
        width: 50%;
        height: 50%;
        float: left;
        font-size: 30px;
        color: white;
        background-color: #003559;
        font-size: 16px;
        height: 330px;
    }

    .blog2 {
        width: 50%;
        height: 50%;
        float: right;
        font-size: 16px;
    }

    .blog3 {
        width: 50%;
        height: 50%;
        float: right;
        font-size: 30px;
        color: black;
        background-color: #E0EAF5;
        font-size: 16px;
        height: 330px;
    }

    .blog4 {
        width: 50%;
        height: 50%;
        float: left;
    }

    .blog5 {
        width: 50%;
        height: 50%;
        float: left;
        color: white;
        background-color: #0D2137;
        font-size: 16px;
        height: 330px;
    }

    .blog6 {
        width: 50%;
        height: 50%;
        float: right;
    }

    .blog7 {
        width: 50%;
        height: 50%;
        float: right;
        font-size: 30px;
        color: white;
        background-color: #FF8E2B;
        font-size: 16px;
        height: 330px;
    }

    .blog8 {
        width: 50%;
        height: 50%;
        float: left;
        font-size: 16px;
    }

    .the_icon {
        text-align: center;
        vertical-align: middle;
        display: table-cell;
    }

    .the_icon img {
        margin-top: 5%;
        margin-bottom: 5%;
        width: 300px;
        height: 300px;
        height: auto;
        font-size: 16px;
        margin-left: 45%;
    }
</style>