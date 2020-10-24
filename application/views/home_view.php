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

</head>


<body style="text-align:center;">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ไหลแล้วไหลเลย -->
  <marquee direction="left" width="1000px">
    <FONT COLOR="#990033" size="6"><strong>NRA COMPUTER มีโปรโมชั่นมากมาย เพื่อคุณ ที่นี่ที่เดียว!!</strong>
  </marquee>
  <style>
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
  </head>

  <body>

    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="<?php echo base_url('img/maina.jpg'); ?>" style="width:20%">
        <img src="<?php echo base_url('img/mainb.jpg'); ?>" style="width:30%">
        <img src="<?php echo base_url('img/main3.jpg'); ?>" style="width:20%">
        <img src="<?php echo base_url('img/nueng04.jpg'); ?>" style="width:20%">
        <div class="text">Best gaming with intel</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="<?php echo base_url('img/nueng02.jpg'); ?>" style="width:20%">
        <img src="<?php echo base_url('img/nueng02.jpg'); ?>" style="width:20%">
        <img src="<?php echo base_url('img/nueng02.jpg'); ?>" style="width:20%">
        <img src="<?php echo base_url('img/nueng02.jpg'); ?>" style="width:20%">
        <div class="text"> Choose your weapons</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="<?php echo base_url('img/nueng01.jpg'); ?>" style="width:20%">
        <img src="<?php echo base_url('img/nueng01.jpg'); ?>" style="width:20%">
        <img src="<?php echo base_url('img/nueng01.jpg'); ?>" style="width:20%">
        <img src="<?php echo base_url('img/nueng01.jpg'); ?>" style="width:20%">
        <div class="text"> Choose your armor</div>
      </div>

      <div class="w3-center">
        <div class="w3-section">
          <button class="w3-btn" style="position:absolute;top:52%;left:0" onclick="plusDivs(-1)">❮</button>
          <button class="w3-btn" style="position:absolute;top:52%;right:0" onclick="plusDivs(1)">❯</button>
        </div>
      </div>


    </div>

    <script>
      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = x.length
        };
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
      }
    </script>


    </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
      }
    </script>

    <script>
      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = x.length
        };
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
      }
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
    </style>

    <div class="icon-bar">

      <a href="https://www.facebook.com/puwarin.nueng.92/" class="facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="google"><i class="fa fa-google"></i></a>
      <a href="https://www.youtube.com/watch?v=syFZfO_wfMQ" class="youtube"><i class="fa fa-youtube"></i></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
    <!-- social -->

    <!-- mainboard -->
    <div class="container">
      <div class="row">
        <div class="col-md-12"><br>



          <!-- <h4 class="nt" width=40 style="text-align:left;">Mainboard</h4> -->
          <h3 align="left">Mainboard <span class="badge badge-secondary">new</span></h3>
        </div>

        <br>

        <div class="col-md-3">
          <a href="<?php echo site_url('home/asus'); ?>">
            LGA1200 Z490 Rog XI Formula</a>
          <br>
          <img src="<?php echo base_url('img/menu1.jpg'); ?>" width="50%">
          <p align="center">
            <a>15,000 บาท</a>
            <br>
            <a href="<?php echo site_url('Welcome/index'); ?>" class="btn btn-primary"> เพิ่มไปที่รถเข็น</a>
          </p>
        </div>

        <div class="col-md-3">
          <a href="<?php echo site_url('home/asus'); ?>">
            LGA1200 Z490 MSI Godlike</a>
          <br>
          <img src="<?php echo base_url('img/menu1.jpg'); ?>" width="50%">
          <p align="center">
            <a>22,000 บาท</a>
            <br>
            <a href="<?php echo site_url('Welcome/index'); ?>" class="btn btn-primary"> เพิ่มไปที่รถเข็น</a>
          </p>
        </div>

        <div class="col-md-3">
          <a href="<?php echo site_url('home/asus'); ?>">
            LGA1200 Z490 Aorus xteame</a>
          <br>
          <img src="<?php echo base_url('img/menu1.jpg'); ?>" width="50%">
          <p align="center">
            <a>18,000 บาท</a>
            <br>
            <a href="<?php echo site_url('Welcome/index'); ?>" class="btn btn-primary"> เพิ่มไปที่รถเข็น</a>
          </p>
        </div>

        <div class="col-md-3">
          <a href="<?php echo site_url('home/asus'); ?>">
            LGA1200 Z490 Aorus xteame</a>
          <br>
          <img src="<?php echo base_url('img/menu1.jpg'); ?>" width="50%">
          <p align="center">
            <a>18,000 บาท</a>
            <br>
            <a href="<?php echo site_url('Welcome/index'); ?>" class="btn btn-primary"> เพิ่มไปที่รถเข็น</a>
          </p>
        </div>


      </div>
    </div>



    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <h3 align="left">CPU<span class="badge badge-secondary">new</span></h3>
          <br>

        </div>

        <div class="col-md-3">
          <h6>mainboard xi Formula</h6>
          <img src="<?php echo base_url('img/menu1.jpg'); ?>" width="50%">
          <p align="center">
            15,000 <br>
            <a href="<?php echo site_url('Welcome/index'); ?>" class="btn btn-primary"> เพิ่มไปที่รถเข็น</a>
          </p>
        </div>

        <div class="col-md-3">
          <h6>mainboard MSI Godlike</h6>
          <img src="<?php echo base_url('img/menu1.jpg'); ?>" width="50%">
          <p align="center">
            20,000 <br>
            <a href="<?php echo site_url('Welcome/index'); ?>" class="btn btn-primary"> เพิ่มไปที่รถเข็น</a>
          </p>
        </div>

        <div class="col-md-3">
          <h6>mainboard Aorus xteame</h6>
          <img src="<?php echo base_url('img/menu1.jpg'); ?>" width="50%">
          <p align="center">
            18,000 <br>
            <a href="<?php echo site_url('Welcome/index'); ?>" class="btn btn-primary"> เพิ่มไปที่รถเข็น</a>
          </p>
        </div>

        <div class="col-md-3">
          <h6>mainboard Aorus xteame</h6>
          <img src="<?php echo base_url('img/menu1.jpg'); ?>" width="50%">
          <p align="center">
            18,000 <br>
            <a href="<?php echo site_url('Welcome/index'); ?>" class="btn btn-primary"> เพิ่มไปที่รถเข็น</a>
          </p>
        </div>

      </div>
    </div>


    <div class="container ft">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <p align="center" class="ft">
            @2020
          </p>
        </div>
      </div>
    </div>



  </body>

</html>