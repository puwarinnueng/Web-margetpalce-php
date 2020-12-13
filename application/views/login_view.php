<!-- หน้าเข้าสู่ระบบ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ComStore</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="sing-in">
                <div class="forms_container">
                    <div class="signin">
                        <form action="<?php echo site_url('user/check2'); ?>" method="post" class="sign-in-form">
                            <h2 class="title">เข้าสู่ระบบ ComStore</h2>
                            <div class="input-field">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="m_email" placeholder="Email" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="m_password" placeholder="Password" />
                            </div>
                            <input type="submit" value="เข้าสู่ระบบ" class="btn solid" />
                        </form>
                        <form action="<?php echo site_url('user/forgotpass'); ?>" class="form-forgot">
                            <input type="submit" value="ลืมรหัสผ่าน ?" class="forgot" />
                        </form>
                    </div>
                </div>
                <div class="panels_container">
                    <div class="panel left-panel">
                        <div class="content-panel">
                            <h3>สมัครสมาชิก</h3>
                            <p>ลูกค้าสามารถสมัครสมาชิกได้ที่นี่ เพื่อสามารถซื้อสินค้าจากทาง
                                เว็บไซต์เราได้อย่างสะดวกสบายพร้อมกับสิทธิประโยชน์ต่างๆ</p>
                            <form action="<?php echo site_url('insertdata'); ?>" class="form-hoizontal">
                                <button class="btn transparent" id="sign-in-btn">
                                    ลงทะเบียน
                                </button>
                            </form>
                        </div>
                        <img src="<?php echo base_url('img/addTocart.svg'); ?>" class="image2" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>