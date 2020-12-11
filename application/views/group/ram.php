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

  <h1 class="Head_title">RAM DDR4</h1>
  <hr class="style1">
  <br>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/ram1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/ram_kingston'); ?>">32GB (16GBX2) DDR4 BUS2666 KINGSTON HYPERX FURY</a></div>
            <br><br>
            <h2 class="price">2,600.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/ram2.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/ram_gskill'); ?>">16GB (8GBX2) DDR4 BUS3200 G.SKILL TRIDENT Z RGB</a></div>
            <br><br>
            <h2 class="price">3,100.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/ram3.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/ram_corsair'); ?>">16GB (8GBX2) BUS3600 CORSAIR VENGEANCE RGB PRO</a></div>
            <br><br>
            <h2 class="price">3,500.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
          <!-- ใช้รูป ram5 เพราะ 4 มันแก้รูปไม่ได้ เป็นรูปเดิมตลอด -->
            <img src="<?php echo base_url('img/ram5.png'); ?>"> 
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/ram_thermal'); ?>">16 GB (8GBX2) BUS4000 THERMALTAKE TOUGHRAM</a></div>
            <br><br>
            <h2 class="price">5,000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>