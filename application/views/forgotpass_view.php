<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-7">

            <br>
            <br>
            <h2 style="text-align:center;"> คุณลืมรหัสผ่านใช่หรือไม่?</h2>
            <br>
            <form action="<?php echo site_url('user/wantlogin'); ?>" method="post" class="form-hoizontal">

                <div class="form-group row">
                    <div class="col-sm-2 control-label">E-mail</div>
                    <div class="col-sm-9">
                        <input type="text" name="m_email" required class="form-control" placeholder="ระบุอีเมลของคุณ">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">ยืนยัน E-mail ของคุณ</button>
                    </div>
                </div>

            </form>

            <form action="<?php echo site_url('user'); ?>" method="post" class="form-hoizontal">
                <div class="form-group row">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">กลับหน้าเข้าสู่ระบบ</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<br>