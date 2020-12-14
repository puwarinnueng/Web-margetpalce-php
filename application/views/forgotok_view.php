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
                <div class="forgot2">
                    <h4> รายละเอียดบัญชีของคุณ กรุณานำไปกรอกที่หน้าเข้าสู่ระบบเพื่อยืนยัน</h4>
                    <table class="table-forgot2">
                        <colgroup span=“1” width=“500px”></colgroup>
                        <tbody>
                            <?php foreach ($query as $rs) { ?>
                                <form action="<?php echo site_url('user'); ?>" method="post">
                                    <tr>
                                        <td><label>email : </label></td>
                                        <td><?php echo $rs->m_email; ?></td>
                                    </tr>
                                    <tr>
                                        <td><label>password : </label></td>
                                        <td><?php echo $rs->m_password; ?></td>
                                    </tr>
                                </form>
                            <?php } ?>

                        </tbody>
                    </table>
                    <form action="<?php echo site_url('user'); ?>" method="post" class="form-hoizontal">
                        <div class="form-content3">
                            <input type="submit" value="กลับหน้าเข้าสู่ระบบ" class="btn_back1" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>