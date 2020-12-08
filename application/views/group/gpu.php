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
    <h1 class="Best-sellers">GHARPHIC CARD</h1>
  </div>
  <hr class="style1">
  <br>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/gpu1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">MSI RTX 2060 SUPER</a></div>
            <br><br>
            <h2 class="price">14,000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/gpu2.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">MSI RTX 2070 SUPER</a></div>
            <br><br>
            <h2 class="price">19,000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/gpu3.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">AORUS RTX 2080 SUPER</a></div>
            <br><br>
            <h2 class="price">25,000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/gpu4.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">GALAX RTX 2080 TI</a></div>
            <br><br>
            <h2 class="price">45,000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>