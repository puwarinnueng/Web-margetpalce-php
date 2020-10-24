    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">

                <!-- <table width=100% cellpadding="4" cellspacing="1" style="border:1px solid #dcdc77;">
                   <tr>
                       <td bgcolor="#dcdc77" style="border-style:solid;border-width:4px;border-color:#dcdc77 gray gray #dcdc77;"> -->
                <h4 style="text-align:center;"> สมัครสมาชิก</h4>
                <br>
                <form action="<?php echo site_url('insertdata/adding'); ?>" method="post" class="form-hoizontal" enctype="multipart/form-data">


                    <div class="form-group row">
                        <div class="col-sm-2 control-label">ชื่อ</div>
                        <div class="col-sm-9">
                            <input type="text" name="m_name" required class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">นามสกุล</div>
                        <div class="col-sm-9">
                            <input type="text" name="m_lname" required class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">อีเมล</div>
                        <div class="col-sm-9">
                            <input type="email" name="m_email" required class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">รหัสผ่าน</div>
                        <div class="col-sm-9">
                            <input type="password" name="m_password" required class="form-control">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-2 control-label">เบอร์โทรศัพท์</div>
                        <div class="col-sm-9">
                            <input type="text" name="m_tel" required class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">ที่อยู่</div>
                        <div class="col-sm-9">
                            <input type="text" name="m_ads" required class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">รูปภาพ</div>
                        <div class="col-sm-5">
                            <input type="file" name="m_img" accapt="image/*">อัปโหลดรูปภาพ</button>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label"></div>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary">ตกลง</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <br>