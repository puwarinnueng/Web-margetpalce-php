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
  <title>Mainborad</title>
  <link rel="stylesheet" href="Home_view.php">

</head>


<body style="text-align:center;">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <h1 class="Head_title">MAINBOARD SOCKET 1200</h1>
  <hr class="style1">
  <br>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <a href="<?php echo site_url('home/mb_asus'); ?>"><img src="<?php echo base_url('img/mb1.png'); ?>"></a>
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/mb_asus'); ?>">LGA1200 ASUS ROG Z490 MAXIMUS XII FORMULA</a></div>
            <br><br>
            <h2 class="price">18,400.-</h2>
            <a class="buy" href="<?php echo site_url('cart/mb_asus'); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <a href="<?php echo site_url('home/mb_msi'); ?>"><img src="<?php echo base_url('img/mb2.png'); ?>"></a>
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/mb_msi'); ?>">LGA1200 MSI MEG Z490 GODLIKE</a></div>
            <br><br>
            <h2 class="price">25,900.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <a href="<?php echo site_url('home/mb_aorus'); ?>"><img src="<?php echo base_url('img/mb3.png'); ?>"></a>
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/mb_aorus'); ?>">LGA1200 GIGABYTE Z490 AORUS XTREME</a></div>
            <br><br>
            <h2 class="price">24,900.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <a href="<?php echo site_url('home/mb_asrock'); ?>"><img src="<?php echo base_url('img/mb4.png'); ?>"></a>
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/mb_asrock'); ?>">LGA1200 ASROCK Z490 <br>TAICHI</a></div>
            <br><br>
            <h2 class="price">12,600.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>