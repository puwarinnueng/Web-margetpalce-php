  <!-- หน้ายืนยันการแก้ไขข้อมูล user -->
  <br>
  <br>
  <div class="container">
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-7">
              <h4 style="text-align:center;"> หน้ายืนยันข้อมูลสินค้า</h4>
              <br>
              <form action="<?php echo site_url('cart/data'); ?>" method="post" class="form-hoizontal">

                  <img src="<?php echo base_url('img'); ?>/<?php echo $rsedit->p_img; ?>" width="100px">
                  <br>
                  <br>
                  <div class="form-group row">
                      <div class="col-sm-2 control-label">รหัสสินค้า</div>
                      <div class="col-sm-6">
                          <input type="text" name="p_id" required class="form-control" value="<?php echo $rsedit->p_id; ?>">
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-sm-2 control-label">ประเภทสินค้า</div>
                      <div class="col-sm-6">
                          <input type="text" name="p_type" required class="form-control" value="<?php echo $rsedit->p_type; ?>">
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
                      <div class="col-sm-2 control-label"></div>
                      <div class="col-sm-5">
                          <input type="hidden" name="p_id" value="<?php echo $rsedit->p_id; ?>">
                          <button type="submit" class="btn btn-primary">เพิ่มเข้ารถเข็น</button>
                      </div>
                  </div>

              </form>
          </div>
      </div>
  </div>




  </html>