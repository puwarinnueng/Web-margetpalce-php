  <div class="container">
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-7">
              <h4 style="text-align:left;"> แก้ไขข้อมูล</h4>
              <br>
              <form action="<?php echo site_url('insertdata/editdata'); ?>" method="post" class="form-hoizontal">

                  <div class="form-group row">
                      <div class="col-sm-2 control-label">Name</div>
                      <div class="col-sm-6">
                          <input type="text" name="m_name" required class="form-control" placeholder="ชื่อ" 
                          value="<?php echo $rsedit->m_name; ?>">
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-sm-2 control-label">Lastname</div>
                      <div class="col-sm-6">
                          <input type="text" name="m_lname" required class="form-control" placeholder="สกุล"
                          value="<?php echo $rsedit->m_lname; ?>">
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-sm-2 control-label">Phone</div>
                      <div class="col-sm-5">
                          <input type="text" name="m_tel" required class="form-control" placeholder="เบอร์โทรศัพท์"
                          value="<?php echo $rsedit->m_tel; ?>">
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-sm-2 control-label">Address</div>
                      <div class="col-sm-7">
                          <input type="text" name="m_ads" required class="form-control" placeholder="ที่อยู่"
                          value="<?php echo $rsedit->m_ads; ?>">
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-sm-2 control-label"></div>
                      <div class="col-sm-5">
                          <input type="hidden" name="m_id" value="<?php echo $rsedit->m_id; ?>">
                          <button type="submit" class="btn btn-primary">ตกลง</button>
                      </div>
                  </div>

              </form>
          </div>
      </div>
  </div>




  </html>