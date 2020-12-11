<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-7">

            <br>
            <br>
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

        </div>
    </div>
</div>
<br>