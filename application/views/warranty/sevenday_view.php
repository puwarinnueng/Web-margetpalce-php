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
    <title>เงื่อนไขการเครมเปลี่ยนสินค้าภายใน 7 วัน</title>
    <link rel="stylesheet" href="Home_view.php">

</head>


<body style="text-align:center;">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <h1 class="Head_title">เงื่อนไขการเครมเปลี่ยนสินค้าภายใน 7 วัน</h1>
    <hr class="style1">
    <br>
    <ol class="warranty_7days">
        <li>สินค้าที่เสียหายบกพร่องจากการใช้งานปกติ สามารถนำกลับมาเปลี่ยนใหม่ได้ภายใน 7 วันนับจากวันที่ลูกค้าได้รับสินค้า (อ้างอิงจากวันที่สั่งซื้อ)
            บริษัทขอสงวนสิทธิ์ในการเปลี่ยนแปลงสินค้าต้องเป็นรุ่นเดียวกันเท่านั้นและสินค้าต้องมีอุปกรณ์ครับ
        </li><br>
        <li>กรณีที่มีการอัพเกรดสินค้าทดแทนรุ่นอื่นหรือรุ่นที่ใกล้เคียงกัน รวมทั้งกรณีที่ลูกค้าได้สินค้ารุ่นใหม่ที่ดีกว่าเดิม ซึ่งลูกค้าต้องจ่ายส่วนต่างที่เพิ่มขึ้น
            โดยทางบริษัทจะแจ้งลูกค้าเพื่อทราบและยืนยันก่อนมีการอัพเกรดสินค้าทุกครั้ง
        </li><br>
        <li>
            สินค้าที่อยู่ในสภาพนอกเงื่อนไข เช่น ชำรุด,แตก,หัก,บุบ,ไหม้,บิ่น,งอ,เบี้ยว,ร้าว,ทะลุ,มีรอยขูดที่แผงวงจรหรืออุปกรณ์บางส่วนหลุดหายไป เป็นต้น ถือว่าสิ้นสุดการรับประกัน
        </li><br>
        <li>
            สินค้าที่มีสภาพผิดปกติซึ่งไม่ควรเกิดขึ้นเองหรือการเก็บรักษาอย่างไม่ถูกต้อง เช่น มีคราบกาว,คราบออกไซด์,คราบน้ำ,คราบมูลสัตว์,มีรอยสนิม,
            มีรอยขีดข่วน,PCB มีลายวงจรขาดเป็นต้น ถือว่าสิ้นสุดการรับประกัน
        </li><br>
        <li>การส่งเครมสินค้าจำเป็นต้องมีกล่องสินค้า Sticker และหมายเลขประจำตัวสินค้า (Serial No.) ของทางบริษัท และSupplier
            รวมทั้ง Serial ต่างประเทศติดอยู่ หากมีรอยชำรุด,ฉีกขาด,ลบ,หลุดหาย หรือมีการแก้ไข Sticker รับประกันที่ติดบนตัวสินค้า ถือว่าสิ้นสุดระยะเวลาการรับประกัน
        </li><br>
        <li>
            ทางบริษัทไม่รับเปลี่ยน หรือคืนสินค้า ที่เกิดขึ้นจากความไม่พอใจ หรือการสั่งซื้อที่เกิดจากความผิดพลาดของลูกค้าไม่ว่ากรณีใดๆ
        </li>
    </ol>

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

    .warranty_7days {
        width: 50%;
        text-align: left;
        font-size: 16px;
        line-height: 30px;
        margin: auto;
        padding: 20px 40px;
        white-space: wrap;
        text-overflow: ellipsis;
        border: 4px solid #ff9d47;
        border-radius: 20px;
        /* border: 4px solid #003559; */
    }
</style>