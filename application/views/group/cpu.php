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
  <title>Com Store</title>
  <link rel="stylesheet" href="Home_view.php">
</head>

<body>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <h1 class="Head_title">CPU INTEL GEN 10 SOCKET 1200</h1>
  <hr class="style1">
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/cpu1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/cpu_i3'); ?>">INTEL LGA1200 <br> CORE I3-10300</a></div>
            <br><br>
            <h2 class="price">5,400.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/cpu2.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/cpu_i5'); ?>">INTEL LGA1200 <br> CORE I5-10600K</a></div>
            <br><br>
            <h2 class="price">9,800.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/cpu3.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/cpu_i7'); ?>">INTEL LGA1200 <br> CORE I7-10700K</a></div>
            <br><br>
            <h2 class="price">15,000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/cpu4.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url('home/cpu_i9'); ?>">INTEL LGA1200 <br> CORE I9-10900K</a></div>
            <br><br>
            <h2 class="price">19,500.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>