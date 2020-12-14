<!-- หน้ากรอกอีกเมลเพื่อขอดูรหัสที่ลืม -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลืมรหัสผ่าน ?</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="forgot">
                <h3> คุณลืมรหัสผ่านใช่หรือไม่ ?</h3><br>
                <div class="form-forgot-container">
                    <form action="<?php echo site_url('user/wantlogin'); ?>" method="post" class="form-hoizontal">
                        <div class="form-content">
                            <label for="email">Email : </label>
                            <input type="text" name="m_email" required placeholder="ระบุอีเมลของคุณ">
                        </div>
                        <div class="form-content2">
                            <input type="submit" value="ยืนยัน E-mail ของคุณ" class="btn_forgot" />
                        </div>
                    </form>

                    <form action="<?php echo site_url('user'); ?>" method="post" class="form-hoizontal">
                        <div class="form-content3">
                            <input type="submit" value="กลับหน้าเข้าสู่ระบบ" class="btn_back" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>