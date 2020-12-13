    <!-- หน้าสมัครสมาชิก -->


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Comstore</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="sing-in">
                    <div class="forms_container">
                        <div class="regis">
                            <form action="<?php echo site_url('insertdata/adding'); ?>" method="post" class="sign-in-form" enctype="multipart/form-data" ;>
                                <h2 class="title">สมัครสมาชิก ComStore</h2>
                                <div class="input-field">
                                <i class="far fa-id-card"></i>
                                    <input type="text" name="m_name" placeholder="ชื่อ" />
                                </div>
                                <div class="input-field">
                                <i class="far fa-id-card"></i>
                                    <input type="text" name="m_lname" placeholder="นามสกุล" />
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" name="m_email" placeholder="Email" />
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-key"></i>
                                    <input type="password" name="m_password" placeholder="รหัสผ่าน" />
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-phone-alt"></i>
                                    <input type="text" name="m_tel" placeholder="เบอร์โทรศัพท์" />
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input type="text" name="m_ads" placeholder="ที่อยู่" />
                                </div>
                                <div class="update-img">
                                    <label for="myfile">เลือกรูปภาพ:</label><input type="file" name="m_img" accapt="image/*">
                                </div>
                                <input type="submit" value="ลงทะเบียน" class="btn solid" onclick="return confirm('ยืนยันการสมัครสมาชิก')" />
                            </form>
                        </div>
                    </div>
                    <div class="panels_container">
                        <div class="panel left-panel">
                            <div class="content-panel">
                                <h3>เข้าสู่ระบบ</h3>
                                <p>ลูกค้าสามารถเข้าสู่ระบบได้ที่นี่ เพื่อสามารถซื้อสินค้าจากทาง
                                    เว็บไซต์เราได้อย่างสะดวกสบายพร้อมกับสิทธิประโยชน์ต่างๆ</p>
                                <form action="<?php echo site_url('User'); ?>" class="form-hoizontal">
                                    <button class="btn transparent" id="sign-in-btn">
                                        เข้าสู่ระบบ
                                    </button>
                                </form>
                            </div>
                            <img src="<?php echo base_url('img/shopping2.svg'); ?>" class="image2" alt="">
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-7">
                    <h4 style="text-align:center;"> สมัครสมาชิก</h4>
                    <br>
                    <form action="<?php echo site_url('insertdata/adding'); ?>" method="post" class="form-hoizontal" enctype="multipart/form-data" ;>


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
                                <button type="submit" class="btn btn-primary" onclick="return confirm('ยืนยันการสมัครสมาชิก')">ตกลง</button>
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </body>

    </html>