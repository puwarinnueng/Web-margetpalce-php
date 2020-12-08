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



  <br><br>
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


  <!-- social -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      margin: 0;

      height: 2000px;
    }

    .icon-bar {
      position: fixed;
      top: 76%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    .icon-bar a {
      display: block;
      text-align: center;
      padding: 16px;
      transition: all 0.3s ease;
      color: white;
      font-size: 20px;
    }

    .icon-bar a:hover {
      background-color: #000;
    }

    .facebook {
      background: #3B5998;
      color: white;
    }

    .twitter {
      background: #55ACEE;
      color: white;
    }

    .google {
      background: #dd4b39;
      color: white;
    }

    .linkedin {
      background: #007bb5;
      color: white;
    }

    .youtube {
      background: #bb0000;
      color: white;
    }

    .fa-instagram {
      background: #125688;
      color: white;
    }

    .content {
      margin-left: 75px;
      font-size: 30px;
    }

    .head-goods {
      font-family: 'Prompt', sans-serif;
      margin: 100px 0 10px;
    }
  </style>

 
  <div class="icon-bar">

    <a href="https://www.facebook.com/puwarin.nueng.92/" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="google"><i class="fa fa-google"></i></a>
    <a href="https://www.youtube.com/watch?v=syFZfO_wfMQ" class="youtube"><i class="fa fa-youtube"></i></a>
    <a href="#" class="fa fa-instagram"></a>
  </div>
  <!-- social -->

  <div class="head-goods">
    <h1 class="Best-sellers">โปรโมชั่น</h1>
  </div>
  <hr class="style1">
  <br>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/1.png'); ?>">
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
            <img src="<?php echo base_url('img/1.png'); ?>">
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
            <img src="<?php echo base_url('img/1.png'); ?>">
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
            <img src="<?php echo base_url('img/1.png'); ?>">
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

  <br><br><br><br><br>
  <h1 class="Best-sellers">สินค้าขายดี</h1>
  <hr class="style1">
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/1.png'); ?>">
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
            <img src="<?php echo base_url('img/1.png'); ?>">
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
            <img src="<?php echo base_url('img/1.png'); ?>">
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
            <img src="<?php echo base_url('img/1.png'); ?>">
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

  <br><br><br><br><br>
  <h1 class="Best-sellers">สินค้ามาใหม่</h1>
  <hr class="style1">
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-product">
          <div class="imgBx">
            <img src="<?php echo base_url('img/1.png'); ?>">
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
            <img src="<?php echo base_url('img/1.png'); ?>">
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
            <img src="<?php echo base_url('img/1.png'); ?>">
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
            <img src="<?php echo base_url('img/1.png'); ?>">
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