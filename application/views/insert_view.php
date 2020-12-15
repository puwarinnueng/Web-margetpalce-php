    <!-- หน้าสมัครสมาชิก -->
    <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>
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
                                    <input type="text" name="m_name" required placeholder="ชื่อ" />
                                </div>
                                <div class="input-field">
                                    <i class="far fa-id-card"></i>
                                    <input type="text" name="m_lname" required placeholder="นามสกุล" />
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" name="m_email" required placeholder="Email" />
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-key"></i>
                                    <input type="password" name="m_password" required placeholder="รหัสผ่าน" />
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-phone-alt"></i>
                                    <input type="text" name="m_tel" required placeholder="เบอร์โทรศัพท์" />
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input type="text" name="m_ads" required placeholder="ที่อยู่" />
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
            </div>
        </div>
    </body>

    </html>