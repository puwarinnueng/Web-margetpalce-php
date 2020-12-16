<!-- วิธีการสั่งซื้อสินค้าออนไลน์ -->
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
    <title>วิธีการสั่งซื้อสินค้าออนไลน์</title>
    <link rel="stylesheet" href="Home_view.php">

</head>


<body style="text-align:center;">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <h1 class="Head_title">วิธีการสั่งซื้อสินค้าออนไลน์</h1>
    <hr class="style1">

    <div class="container">
    <div class="buying_step">
        <div class="step1"><br>
            <h2 class="step_head"><b>ขั้นตอนที่ 1</b></h2>
            <br>
            <h3>เมื่อพบสินค้าที่ตัดสินใจจะซื้อแล้ว ให้กดที่ปุ่ม "เพิ่มใส่รถเข็น" โดยสินค้าจะถูกนำเข้าไปอยู่ในรถเข็นสินค้า</h3>
            <br>
            <img src="<?php echo base_url('img/buying_step1.jpg'); ?>">
            <br><br><br><br>
        </div>

        <div class="step2">
            <h2 class="step_head"><b>ขั้นตอนที่ 2</b></h2>
            <br>
            <h3>เมื่อเพิ่มสินค้าทีต้องการซื้อเข้าในรถเข็นแล้ว สามารถกดเข้ามาดูรถเข็นเพื่อดูรายการสินค้าได้</h3>
            <br>
            <img src="<?php echo base_url('img/buying_step2.jpg'); ?>">
            <br><br><br><br>
        </div>

        <div class="step3">
            <h2 class="step_head"><b>ขั้นตอนที่ 3</b></h2>
            <br>
            <h3>หากเลือกสินค้าที่ต้องการจะซื้อครบแล้ว ให้กดที่ปุ่ม "ดำเนินการสั่งซื้อ" เพื่อดำเนินการต่อ แต่ถ้าหากยังต้องการ</h3>
            <br>
            <img src="<?php echo base_url('img/buying_step3.jpg'); ?>">
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
        box-shadow: 10px 10px 5px #ccc;
        -moz-box-shadow: 10px 10px 5px #ccc;
        -webkit-box-shadow: 10px 10px 5px #ccc;
        -khtml-box-shadow: 10px 10px 5px #ccc;
    }
    
    .buying_step {
        background-color: #E0EAF5;
    }
</style>