<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


<style>
  body {
    background-color: whitesmoke;
  }
</style>

<head>
  <meta charset="utf-8">
  <title>Com Store</title>
  <link rel="stylesheet" href="Home_css.php">

</head>


<body style="text-align:center;">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ไหลแล้วไหลเลย -->
  <!-- <marquee direction="left" width="1000px">
    <FONT COLOR="#990033" size="6"><strong>NRA COMPUTER มีโปรโมชั่นมากมาย เพื่อคุณ ที่นี่ที่เดียว!!</strong>
  </marquee> -->
  <!-- <style>
    * {
      box-sizing: border-box;
    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Caption text */
    .text {
      color: black;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: white;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 4s;
      animation-name: fade;
      animation-duration: 4s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: 4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: 4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>
  </head> -->


  <!-- image slide -->

  <div id="slider">
    <input type="radio" name="slider" id="slide1" checked>
    <input type="radio" name="slider" id="slide2">
    <input type="radio" name="slider" id="slide3">
    <input type="radio" name="slider" id="slide4">
    <div id="slides">
      <div id="overflow">
        <div class="inner">
          <div class="slide slide_1">
            <div class="slide-content">
              <img src="<?php echo base_url('img/img1.jpg'); ?>">
            </div>
          </div>
          <div class="slide slide_2">
            <div class="slide-content">
              <img src="<?php echo base_url('img/img2.jpg'); ?>">
            </div>
          </div>
          <div class="slide slide_3">
            <div class="slide-content">
              <img src="<?php echo base_url('img/img3.jpg'); ?>">
            </div>
          </div>
          <div class="slide slide_4">
            <div class="slide-content">
              <img src="<?php echo base_url('img/img4.jpg'); ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="controls">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
    </div>
    <div id="bullets">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
    </div>
  </div>


  <script type="text/javascript">
    var counter = 1;
    setInterval(function() {
      document.getElementById('slide' + counter).checked = true;
      counter++;
      if (counter > 4) {
        counter = 1;
      }
    }, 5000);
  </script>

<h1 class="Head_title">โปรโมชั่น</h1>
  <hr class="style1">
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <h1 class="Head_title">สินค้าขายดี</h1>
  <hr class="style1">
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <h1 class="Head_title">สินค้ามาใหม่</h1>
  <hr class="style1">
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/mb1.png'); ?>">
          </div>
          <div class="contentBx">
            <div class="brand"><a href="<?php echo site_url(''); ?>">LGA1200 Z490 Rog XI Formula</a></div>
            <br><br>
            <h2 class="price">20000.-</h2>
            <a class="buy" href="<?php echo site_url(''); ?>">เพิ่มใส่รถเข็น</a>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>