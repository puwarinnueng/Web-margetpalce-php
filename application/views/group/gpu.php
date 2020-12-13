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
  <title>GRAPHIC CARD</title>
  <link rel="stylesheet" href="Home_view.php">

</head>


<body style="text-align:center;">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <h1 class="Head_title">GRAPHIC CARD</h1>
  <hr class="style1">
  <br>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <a href="<?php echo site_url('home/gpu_msi_2060'); ?>"><img src="<?php echo base_url('img/gpu1.png'); ?>"></a>
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/gpu_msi_2060'); ?>">MSI RTX 2060 SUPER <br>GAMING X</a></div>
            <br><br>
            <h2 class="price">14,000.-</h2>
            <a class="buy" href="<?php echo site_url('cart/gpu_msi_2060'); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <a href="<?php echo site_url('home/gpu_msi_2070'); ?>"><img src="<?php echo base_url('img/gpu2.png'); ?>"></a>
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/gpu_msi_2070'); ?>">MSI RTX 2070 SUPER <br>GAMING X TRIO</a></div>
            <br><br>
            <h2 class="price">19,000.-</h2>
            <a class="buy" href="<?php echo site_url('cart/gpu_msi_2070'); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <a href="<?php echo site_url('home/gpu_aorus'); ?>"><img src="<?php echo base_url('img/gpu3.png'); ?>"></a>
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/gpu_aorus'); ?>">AORUS RTX 2080 SUPER</a></div>
            <br><br><br>
            <h2 class="price">25,000.-</h2>
            <a class="buy" href="<?php echo site_url('cart/gpu_aorus'); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <a href="<?php echo site_url('home/gpu_galax'); ?>"><img src="<?php echo base_url('img/gpu4.png'); ?>"></a>
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/gpu_galax'); ?>">GALAX RTX 2080 TI SG <br>(1-Click OC)</a></div>
            <br><br>
            <h2 class="price">45,000.-</h2>
            <a class="buy" href="<?php echo site_url('cart/gpu_galax'); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>