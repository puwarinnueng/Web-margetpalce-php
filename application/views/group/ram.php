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

  <div class="head-goods">
    <h1 class="Best-sellers">RAM DDR4</h1>
  </div>
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
            <div class="brand"><a href="<?php echo site_url(''); ?>">BUS2666 KINGSTON HyperX</a></div>
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
            <div class="brand"><a href="<?php echo site_url(''); ?>">BUS3200 G.SKILL TRIDENT Z</a></div>
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
            <div class="brand"><a href="<?php echo site_url(''); ?>">BUS3600 CORSAIR VENGEANCE</a></div>
            <br><br>
            <h2 class="price">3,500.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/ram4.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">BUS4000 THERMALTAKE TR</a></div>
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