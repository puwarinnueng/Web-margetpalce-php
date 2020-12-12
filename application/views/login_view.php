<!-- หน้าเข้าสู่ระบบ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Login ComStore</title>
</head>

<body>

</body>

</html>
<div class="container">
    <div class="row">
        <!-- <div class="col-md-6"> -->
        <div class="sing-in">
            <div class="forms_container">
                <div class="signin">
                    <form action="<?php echo site_url('user/check2'); ?>" method="post" class="sign-in-form">
                        <h2 class="title">เข้าสู่ระบบ</h2>
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
        <!-- </div> -->

















        <!-- <div class="col-md-7">

            <h2 style="text-align:center;"> เข้าสู่ระบบ</h2>
            <br>
            <form action="<?php echo site_url('user/check2'); ?>" method="post" class="form-hoizontal">

                <div class="form-group row">
                    <div class="col-sm-2 control-label">E-mail</div>
                    <div class="col-sm-9">
                        <input type="text" name="m_email" required class="form-control" placeholder="อีเมลของคุณ">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2 control-label">password</div>
                    <div class="col-sm-9">
                        <input type="password" name="m_password" required class="form-control" placeholder="รหัสผ่านของคุณ">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">เข้าสู่ระบบ </button>
                    </div>
                </div>

            </form>

            <form action="<?php echo site_url('insertdata'); ?>" class="form-hoizontal">
                <div class="form-group row">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">สมัครสมาชิก </button>
                    </div>
                </div>
            </form>

            <form action="<?php echo site_url('user/forgotpass'); ?>" class="form-hoizontal">
                <div class="form-group row">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">ลืมรหัสผ่าน </button>
                    </div>
                </div>
            </form>

        </div> -->
    </div>
</div>