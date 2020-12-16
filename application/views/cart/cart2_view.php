  <!-- หน้ายืนยันการแก้ไขข้อมูล user -->
  <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ยืนยันข้อมูลสินค้า</title>
  </head>

  <body>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="confirm_select_2">
                      <h1>การยืนยันสินค้าเข้ารถเข็น</h1>
                      <hr class="style1">
                      <div class="form_confirm_select_2">
                          <form action="<?php echo site_url('cart/data'); ?>" method="post">
                              <div class="img_confirm">
                                  <img src="<?php echo base_url('img'); ?>/<?php echo $rsedit->p_img; ?>">
                              </div>
                              <div class="all_table">
                                  <table class="table_confirm_2">
                                      <tbody>
                                          <tr>
                                              <td style="width: 80px;"><label>รหัสสินค้า</label></td>
                                              <td><label> : </label></td>
                                              <td><input type="text" name="p_id" required value="<?php echo $rsedit->p_id; ?>"></td>

                                          </tr>
                                          <tr>
                                              <td><label>ชื่อสินค้า</label></td>
                                              <td><label> : </label></td>
                                              <td><input type="text" name="p_name" required placeholder="ชื่อ" value="<?php echo $rsedit->p_name; ?>"></td>
                                          </tr>
                                          <tr>
                                              <td><label>ราคา</label></td>
                                              <td><label> : </label></td>
                                              <td><input type="text" name="p_price" required placeholder="สกุล" value="<?php echo $rsedit->p_price; ?>"></td>
                                          </tr>
                                          <tr>
                                              <td><input type="hidden" name="p_type" required class="form-control" value="<?php echo $rsedit->p_type; ?>"></td>
                                          </tr>

                                      </tbody>
                                  </table>
                                  <table class="table-btn">
                                      <tr>
                                          <input type="hidden" name="p_id" value="<?php echo $rsedit->p_id; ?>">
                                          <td><a href="<?php echo site_url('home/index') ?>" class="back_home1"><i class="fa fa-chevron-left" aria-hidden="true"></i> กลับหน้าแรก</a></td>
                                          <td><button type="submit" class="addtocart1">เพิ่มเข้ารถเข็น <i class="fa fa-chevron-right" aria-hidden="true"></i></button></td>
                                      </tr>
                                  </table>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </body>

  </html>