  <!-- หน้ายืนยันการแก้ไขข้อมูล user -->
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
                      <h1>การยืนยันข้อมูลสินค้า</h1>
                      <hr class="style1">
                      <form action="<?php echo site_url('cart/data'); ?>" method="post" class="form_confirm_select_2">
                          <div class="img_confirm">
                              <img src="<?php echo base_url('img'); ?>/<?php echo $rsedit->p_img; ?>">
                          </div>
                          <div class="all">
                              <div class="form_confirm">
                                  <td><label>รหัสสินค้า : </label></td>
                                  <td><input type="text" name="p_id" required value="<?php echo $rsedit->p_id; ?>"></td>
                              </div>
                              <div class="form_confirm">
                                  <label>ชื่อสินค้า : </label>
                                  <input type="text" name="p_name" required placeholder="ชื่อ" value="<?php echo $rsedit->p_name; ?>">
                              </div>
                              <div class="form_confirm">
                                  <label>ราคา : </label>
                                  <input type="text" name="p_price" required placeholder="สกุล" value="<?php echo $rsedit->p_price; ?>">
                              </div>
                              <div class="form_confirm">
                                  <input type="hidden" name="p_type" required class="form-control" value="<?php echo $rsedit->p_type; ?>">
                              </div>
                              <div class="form_confirm">
                                  <input type="hidden" name="p_id" value="<?php echo $rsedit->p_id; ?>">
                                  <button type="submit" class="btn btn-primary">เพิ่มเข้ารถเข็น</button>
                              </div>
                          </div>
                      </form>
                  </div>

                  <!-- <h4 style="text-align:center;"> หน้ายืนยันข้อมูลสินค้า</h4>
                  <form action="<?php echo site_url('cart/data'); ?>" method="post" class="form-hoizontal">
                      <img src="<?php echo base_url('img'); ?>/<?php echo $rsedit->p_img; ?>" width="100px">

                      <div class="form-group row">
                          <div class="col-sm-2 control-label">รหัสสินค้า</div>
                          <div class="col-sm-6">
                              <input type="text" name="p_id" required class="form-control" value="<?php echo $rsedit->p_id; ?>">
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-sm-2 control-label">ชื่อสินค้า</div>
                          <div class="col-sm-6">
                              <input type="text" name="p_name" required class="form-control" placeholder="ชื่อ" value="<?php echo $rsedit->p_name; ?>">
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-sm-2 control-label">ราคา</div>
                          <div class="col-sm-6">
                              <input type="text" name="p_price" required class="form-control" placeholder="สกุล" value="<?php echo $rsedit->p_price; ?>">
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-6">
                              <input type="hidden" name="p_type" required class="form-control" value="<?php echo $rsedit->p_type; ?>">
                          </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-sm-2 control-label"></div>
                          <div class="col-sm-5">
                              <input type="hidden" name="p_id" value="<?php echo $rsedit->p_id; ?>">
                              <button type="submit" class="btn btn-primary">เพิ่มเข้ารถเข็น</button>
                          </div>
                      </div>

                  </form> -->
              </div>
          </div>
      </div>

  </body>

  </html>