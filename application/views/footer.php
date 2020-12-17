<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="footer">
    <div class="container ft">
      <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <div align="center">
            <a>
              <img src="<?php echo base_url('img/logo.gif'); ?>" width="60%">
              <br>
              <p1>
                <br>
                <i class="fa fa-phone"></i> ติดต่อสอบถาม
                <br>
                02-000-0045, 099-632-5417
                <br>
                ร้าน COM STORE
              </p1>
            </a>
          </div>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6>วิธีการชำระเงิน</h6>
          <br>
          <p>ชำระเงินปลายทาง <br>
            โอน/ชำระผ่านบัญชีธนาคาร</p>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6>ช่องทางชำระเงิน</h6> <br>
          <img src="<?php echo base_url('img/kbank.png'); ?>" width="20%">
          <img src="<?php echo base_url('img/scb.png'); ?>" width="20%">
          <img src="<?php echo base_url('img/krungsri.png'); ?>" width="20%">
          <img src="<?php echo base_url('img/bangkok.png'); ?>" width="20%">
          <br>
          <img src="<?php echo base_url('img/ktb.png'); ?>" width="20%">
          <img src="<?php echo base_url('img/tmb_bank.png'); ?>" width="30%">
          <img src="<?php echo base_url('img/promptpay.png'); ?>" width="45%">
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6>บริการขนส่ง</h6>
          <img src="<?php echo base_url('img/dhl.png'); ?>" width="50%">
          <img src="<?php echo base_url('img/kerry.png'); ?>" width="50%">
        </div>
      </div>
    </div>
  </div>

  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    .footer {
      min-width: 100%;
      margin-top: 100px;
      height: 168px;
      background-color: #003559;
      color: white;
      font-family: 'Prompt', sans-serif;
      position: absolute;

    }

    .footer h6 {
      font-size: medium;
      font-weight: bold;
    }

    .footer p1 {
      font-size: 15px;
      vertical-align: baseline;
    }

    .footer p {
      text-align: left;
      font-size: 12px;
    }

    .footer img {
      display: inline-block;
    }

    .footer i {
      font-size: 40px;
      color: white;
      position: relative;
      float: left;
      margin-right: 4px;
    }
  </style>
</body>

</html>