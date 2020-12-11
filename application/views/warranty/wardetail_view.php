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
    <title>com</title>
    <link rel="stylesheet" href="Home_view.php">

</head>


<body style="text-align:center;">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <h1 class="Head_title">เงื่อนไขการรับประกันสินค้า</h1>
    <hr class="style1">
    <div class="warranty">
        <div class="Claim_normal">
            <h2>การเคลมสินค้าปกติ</h2><br>
            <ol class="warranty_Claim">
                <li>
                    ซ่อม/เปลี่ยนสินค้ารุ่นเดียวกัน
                </li><br>
                <li>
                    เปลี่ยนทดแทนด้วยสินค้ารุ่นอื่นที่ใกล้เคียงกัน โดยบริษัท ฯ จะแจ้งให้ลูกค้าทราบก่อนเปลี่ยนสินค้า
                </li><br>
                <li>
                    เสนอลูกค้า Upgrade ซึ่งลูกค้าจะได้มีสินค้าที่มีเทคโนโลยีดีกว่ารุ่นเดิม โดยลูกค้าจ่ายเงิน ในส่วนต่างที่เพิ่มขึ้น ซึ่งทางเรา จะโทรแจ้งลูกค้า เพื่อรับทราบและยืนยันการ Upgrade ก่อนทุกครั้ง
                </li><br>
                <li>
                    ถ้าลูกค้ามีความประสงค์ที่จะรอการเปลี่ยนสินค้า บริษัท ฯ จะแจ้งกำหนดการเข้าของสินค้า โดยประมาณให้ลูกค้าทราบ และแจ้งให้ลูกค้าทราบถึงความคืบหน้าเป็นระยะๆ
                </li><br>
                <li>
                    ทางบริษัทขอสงวนสิทธิ์ในการคืนเป็นเงินแทนให้โดยหักค่าเสื่อมตามนโยบายการคิดค่าเสื่อม เฉพาะในกรณีไม่มีสินค้ารุ่นเดิมเปลี่ยนคืนให้หรือสินค้ารุ่นอื่นไม่มีสเป๊คใกล้เคียง/รองรับสินค้ารุ่นเดิมที่ลูกค้าต้องการใช้งาน
                </li><br>
                <li>
                    ระยะเวลาในการให้การรับประกัน ขึ้นอยู่กับเงื่อนไขการให้ประกันของแต่ละแบรนด์สินค้าผู้จัดจำหน่าย
                </li><br>
                <li>
                    รายละเอียดการรับประกัน จะแสดงข้อมูลที่รายละเอียดของสินค้าแต่ละรายการ
                </li><br>
                <li>
                    ขอสงวนสิทธิ์การให้การรับประกัน ตามที่ได้มีการระบุจากบริษัท เท่านั้น
                </li><br>
                <li>
                    ขอสงวนสิทธิ์การให้การรับประกัน จากการใช้งานตามเงื่อนไขของการใช้งานที่ถูกระบุจากผู้ผลิตสินค้าเท่านั้น
                </li><br>
            </ol>
        </div>
    </div>

    <div class="Out_of_warranty ">
        <h2>สินค้านอกประกัน</h2><br>
        <div class="content_Out_of_warranty">
            <p>สินค้าที่ลูกค้าได้รับแล้วเกิดปัญหา เครื่องเปิดไม่ติด ไฟไม่เข้า โดยที่สภาพสินค้าใหม่ไม่มีร่องรอย
                และอยู่ภายใต้เงื่อนไขการรับประกัน บริษัทยินดีเปลี่ยนตัวใหม่ / คืนเงินให้ทันที แต่หากมีการปริ้นเทสแล้ว
                จะต้องดำเนินการส่งตัวแทนจำหน่ายโดยตรง เพื่อพิจารณา เปลี่ยนเครื่องใหม่ หรือ ซ่อมคืนตัวเดิม
            </p>
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

    .warranty {
        width: 50%;
        text-align: left;
        font-size: 16px;
        line-height: 30px;
        margin: auto;
        white-space: wrap;
        text-overflow: ellipsis;
        border: 4px solid #ff9d47;
        border-radius: 20px;
    }

    .Claim_normal {
        padding: 20px 50px;
    }

    .Claim_normal h2 {
        font-weight: bold;
        color: #003559;
    }

    .Out_of_warranty{
        width: 50%;
        text-align: left;
        font-size: 16px;
        line-height: 30px;
        margin: auto;
        white-space: wrap;
        text-overflow: ellipsis;
        border: 4px solid #ff9d47;
        border-radius: 20px;
        margin-top:2%;
        padding: 20px;
    }

    .Out_of_warranty h2{
        font-weight: bold;
        margin-left: 4%;
    }
    .content_Out_of_warranty p{
        
    }
</style>