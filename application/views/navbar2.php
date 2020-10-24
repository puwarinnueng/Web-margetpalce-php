 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
     * {
         box-sizing: border-box;
     }

     body {
         margin: 0;
     }

     .icon-bar b {
         width: 100%;
         background-color: #555;
         overflow: auto;
     }

     .icon-bar b {
         float: left;
         width: 20%;
         text-align: center;
         padding: 12px 0;
         transition: all 0.3s ease;
         color: white;
         font-size: 36px;
     }

     .icon-bar b:hover {
         background-color: #000;
     }

     .bar1,
     .bar2,
     .bar3 {
         width: 35px;
         height: 5px;
         background-color: #333;
         margin: 6px 0;
         transition: 0.4s;
     }







     .cl-menu li {
         position: relative;
     }

     */ .cl-menu>li:hover {
         font-weight: bold;
         opacity: 1;
         filter: alpha(opacity=100);
     }

     */ .cl-menu li:hover {
         background-color: white;
     }

     .cl-menu li a {
         display: block;
         min-width: 150px;
         padding: 10px;
         color: black;
         /* font-family: 'Rancho', cursive; */
     }

     .cl-menu li:hover a {
         color: #FFF;

     }

     .cl-menu li ul {
         position: absolute;
         top: 0;
         left: 100%;
         -moz-border-radius: 5px;
         -webkit-border-radius: 5px;
         border-radius: 5px;
         display: none;
     }

     .cl-menu li:hover>ul {
         display: block;
         opacity: 0.8;
         filter: alpha(opacity=80);
     }

     .cl-menu li ul li {
         background: black;
         border-bottom: 1px solid white;
         border-top: none;
         border-left: none;
         border-right: none;
     }

     .cl-menu li ul li:last-child {
         border-bottom: none;
     }

     ul {
         padding: 0;
         margin: 0;
         list-style-type: none;
     }


     #flipkart-navbar {
    background-color: #2874f0;
    color: #FFFFFF;
  }

  .row1 {
    padding-top: 15px;
    padding-right: 50px;
  }

  .row2 {
    padding-bottom: 0px;
  }

  .flipkart-navbar-input {
    padding: 11px 16px;
    border-radius: 2px 0 0 2px;
    border: 0 none;
    outline: 0 none;
    font-size: 15px;
  }

  .flipkart-navbar-button {
    background-color: #ffe11b;
    border: 1px solid #ffe11b;
    border-radius: 0 2px 2px 0;
    color: #565656;
    padding: 10px 0;
    height: 43px;
    cursor: pointer;
  }

  .cart-button {
    background-color: #2469d9;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
    padding: 10px 0;
    text-align: center;
    height: 41px;
    border-radius: 2px;
    font-weight: 500;
    width: 100px;
    display: inline-block;
    color: #FFFFFF;
    text-decoration: none;
    color: inherit;
    border: none;
    outline: none;
  }

  .cart-button2 {
    background-color: black;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
    padding: 10px 0;
    text-align: center;
    height: 25px;
    border-radius: 2px;
    font-weight: 500;
    width: 120px;
    display: inline-block;
    color: #FFFFFF;
    text-decoration: none;
    color: inherit;
    border: none;
    outline: none;
  }

  .cart-button:hover {
    text-decoration: none;
    color: #fff;
    cursor: pointer;
  }

  .cart-svg {
    display: inline-block;
    width: 16px;
    height: 16px;
    vertical-align: middle;
    margin-right: 8px;

  }

  .item-number {
    border-radius: 3px;
    background-color: rgba(0, 0, 0, .1);
    height: 20px;
    padding: 3px 6px;
    font-weight: 500;
    display: inline-block;
    color: #fff;
    line-height: 12px;
    margin-left: 10px;
  }

  .upper-links {
    display: inline-block;
    padding: 0 11px;
    line-height: 23px;
    font-family: 'Roboto', sans-serif;
    letter-spacing: 0;
    color: inherit;
    border: none;
    outline: none;
    font-size: 12px;
  }

  .dropdown {
    position: relative;
    display: inline-block;
    margin-bottom: 0px;
  }

  .dropdown:hover {
    background-color: #fff;
  }

  .dropdown:hover .links {
    color: #000;
  }

  .dropdown:hover .dropdown-menu {
    display: block;
  }

  .dropdown .dropdown-menu {
    position: absolute;
    top: 100%;
    display: none;
    background-color: #fff;
    color: #333;
    left: 0px;
    border: 0;
    border-radius: 0;
    box-shadow: 0 4px 8px -3px #555454;
    margin: 0;
    padding: 0px;
  }

  .links {
    color: #fff;
    text-decoration: none;
  }

  .links:hover {
    color: #fff;
    text-decoration: none;
  }

  .profile-links {
    font-size: 12px;
    font-family: 'Roboto', sans-serif;
    border-bottom: 1px solid #e9e9e9;
    box-sizing: border-box;
    display: block;
    padding: 0 11px;
    line-height: 23px;
  }

  .profile-li {
    padding-top: 2px;
  }

  .largenav {
    display: none;
  }

  .smallnav {
    display: block;
  }

  .smallsearch {
    margin-left: 15px;
    margin-top: 15px;
  }

  .menu {
    cursor: pointer;
  }

  @media screen and (min-width: 768px) {
    .largenav {
      display: block;
    }

    .smallnav {
      display: none;
    }

    .smallsearch {
      margin: 0px;
    }
  }

  /*Sidenav*/
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
    box-shadow: 0 4px 8px -3px #555454;
    padding-top: 0px;
  }

  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
  }

  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    color: #fff;
  }

  @media screen and (max-height: 450px) {
    .sidenav a {
      font-size: 18px;
    }
  }

  .sidenav-heading {
    font-size: 36px;
    color: #fff;
  }
 </style>









 <div class="">
     <div class="">
         <div class="col-md-12">

             <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                 <a class="navbar-brand" href="<?php echo site_url(); ?>"><i class="fa fa-home">หน้าหลัก </i></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">



                         <ul class="navbar-nav ">
                             <li class="nav-item dropdown active">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     ☰หมวดหมู่สินค้า
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                     <a class="dropdown-item" href="#">mainboard</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="#">cpu</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="#">ram</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="#">other</a>
                                     <div class="dropdown-divider"></div>
                                     <aside id='menu'>
                                         <ul class="cl-menu">

                                             <li id=''>
                                                 <a href="#" align="left">--nueng ></a>
                                                 <ul>
                                                     <li>
                                                         <a href="#">love rin</a>
                                                     </li>
                                                     <li>
                                                         <a href="#">lovee</a>
                                                     </li>
                                                 </ul>
                                             </li>

                                         </ul>
                                     </aside>
                                 </div>
                             </li>
                         </ul>


                         <ul class="navbar-nav ">
                             <li class="nav-item dropdown active">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <i class="fa fa-envelope"></i>
                                     เงื่อนไขบริการ
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="#">วิธีการสั่งซื้อสินค้าออนไลน์</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="#">วิธีการชำระเงินและแจ้งชำระเงิน</a>

                                     <div class="dropdown-divider"></div>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="#">เงื่อนไขการเปลี่ยนสินค่าคืนภายใน 7 วัน</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="#">เงื่อนไขการรับประกัน</a>
                                 </div>
                             </li>
                         </ul>

                         <ul class="navbar-nav ">
                             <li class="nav-item dropdown active">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <i class="fa fa-wrench"></i>
                                     การประกัน
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="#">เงื่อนไขการเปลี่ยนสินค่าคืนภายใน 7 วัน</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="#">เงื่อนไขการรับประกัน</a>
                                 </div>
                             </li>
                         </ul>


                         <form class="form-inline my-2 my-lg-0 ">
                             <input class="form-control mr-sm-10" type="search " placeholder="Search" aria-label="Search">
                             <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i>
                                 ค้นหา
                             </button>
                         </form>







                         <li class="nav-item active">
                             <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"> </a>
                         </li>
                     </ul>


                     <li class="button">
                         <i class="fa fa-shopping-cart" style="font-size:20px;color:red"></i>
                         <a class="button" href=" ">ตะกร้าสินค้า</a>

                     </li>

                     <ul class="navbar-nav ">
                         <li class="nav-item dropdown active">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="fa fa-fw fa-user"></i>
                                 เข้าสู่ระบบ
                             </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="<?php echo site_url('insertdata'); ?>">สมัครสมาชิก</a>
                                 <a class="dropdown-item" href="<?php echo site_url('insertdata/login'); ?>">เข้าสู่ระบบ</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="<?php echo site_url('insertdata/showmember'); ?>">แก้ไขข้อมูล</a>
                             </div>
                         </li>
                     </ul>
                     
                 </div>
             </nav>
         </div>
     </div>
 </div>