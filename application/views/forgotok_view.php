<!-- หน้าแสดงข้อมูลหลังจากกรอก email แล้ว -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลืมรหัสผ่าน ? </title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4> รายละเอียดบัญชีของคุณ กรุณานำไปกรอกที่หน้าเข้าสู่ระบบ เพื่อยืนยัน</h4>
                <table class="table table=bordered table=hover">
                    <tbody>
                        <?php foreach ($query as $rs) { ?>
                            <tr>
                                <div class="col-md-7">
                                    <form action="<?php echo site_url('user'); ?>" method="post" class="form-hoizontal">

                                        <div align="center" class="form-group row">
                                            <div class="col-sm-6 control-label">email</div>
                                            <div class="col-sm-6">
                                                <input type="text" name="m_email" required class="form-control" value="<?php echo $rs->m_email; ?>">
                                            </div>
                                        </div>

                                        <div align="center" class="form-group row">
                                            <div class="col-sm-6 control-label">password</div>
                                            <div class="col-sm-6">
                                                <input type="text" name="m_password" required class="form-control" value="<?php echo $rs->m_password; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row" align="center">
                                            <div class="col-sm-2 control-label"></div>
                                            <div class="col-sm-5">
                                                <button type="submit" class="btn btn-primary">กลับหน้าเข้าสู่ระบบ </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>