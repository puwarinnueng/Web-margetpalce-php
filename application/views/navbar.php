<body style="text-align:center;">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <div id="flipkart-navbar">
    <div class="container">

      <!-- LOGO -->
      <div class="row row1">
        <div class="col-md-3">
          <a href="<?php echo base_url(''); ?>">
            <img src="<?php echo base_url('img/menu1.jpg'); ?>" width="20%">
          </a>
        </div>

        <!-- Search Box -->
        <div class="col-md-6">
          <div class="wrapper">
            <div class="box-Container">
              <input type="text" class="box-input" placeholder="Search Anything You Want... ">
              <input type="button" value="Search" class="close-btn">
              <span><i class="fa fa-search"></i></span>
            </div>
          </div>
        </div>

        <!-- รถเข็น -->
        <div class="col-md-1">
          <div class="addtocart">
            <table>
              <tr>
                <td><a href="https://www.google.com/" class="add_to_cart"><i class="fa fa-shopping-cart"></i></a></td>
              </tr>
              <tr>
                <!-- <td><a href="https://www.google.com/" class="add_to_cart_txt">รถเข็น</a></td> -->
              </tr>
            </table>
          </div>

        </div>

        <!-- เข้าสู่ระบบ -->
        <div class="col-md-1">
          <div class="dropdown">
            <button class="drop_btn">
              <p class="icon_profile"><i class="fa fa-user" aria-hidden="true"></i></p>
              เข้าสู่ระบบ
            </button>
            <div class="dropdown-content">
              <a href="<?php echo site_url('insertdata'); ?>">สมัครสมาชิก</a>
              <a href="<?php echo site_url('insertdata/login'); ?>">เข้าสู่ระบบ</a>
              <li class="divider"></li>
              <a href="<?php echo site_url('insertdata/showmember'); ?>">แก้ไขข้อมูล</a>
            </div>
          </div>

        </div>

      </div>
      <!-- ----------------------------------------------------------------------------------- -->

      <!-- หมวดหมู่ -->
      <div class="row row2">
        <div class="col-md-4  ">
          <div class="dropdown-group">
            <button class="dropbtn"><i class="fa fa-bars" id="hamburger"></i>หมวดหมู่สินค้า </button>
            <div class="dropdown-content-group">
              <a href="<?php echo site_url('home/group_mb'); ?>">Mainborad</a>
              <a href="<?php echo site_url('home/group_gpu'); ?>">Graphic card</a>
              <a href="<?php echo site_url('home/group_ram'); ?>">RAM</a>
              <a href="<?php echo site_url('home/group_cpu'); ?>">CPU</a>
            </div>
          </div>
        </div>

        <div class="col-md-7">
          <div class="bar-list-menu">
            <ul>
              <li class="active"><a href="<?php echo site_url('home'); ?>"><i class="fa fa-home" id="home"></i>หน้าแรก</a></li>

              <li><a href="#news">เงื่อนไขการบริการ<i class="fa fa-caret-down" id="dropdown_icon"></i></a>
                <ul class="sub-menu1">
                  <li><a href="#">Mainborad</a></li>
                  <li><a href="#">Graphic card</a></li>
                </ul>
              </li>

              <li><a href="#contact">การรับประกัน<i class="fa fa-caret-down" id="dropdown_icon"></i></a>
                <ul class="sub-menu2">
                  <li><a href="#">Mainborad</a></li>
                  <li><a href="#">Graphic card</a></li>
                </ul>

              </li>
              <li><a href="<?php echo site_url('home/about_us'); ?>">เกี่ยวกับเรา</a></li>
            </ul>
          </div>
        </div>

      </div>




    </div>
  </div>