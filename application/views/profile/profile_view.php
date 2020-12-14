<!-- หน้ายืนยันการแก้ไขข้อมูล user -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> โปรไฟล์ผู้ใช้งาน</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left_profile">
                    <form action="<?php echo site_url('insertdata/editdata'); ?>" method="post">
                        <div class="img_profile">
                            <img src="<?php echo base_url('img'); ?>/<?php echo $rsedit->m_img; ?>">
                        </div>
                        <div class="content_left_profile">
                            <table class="table_content_left">
                                <tr>
                                    <td>
                                        <h4>คุณ <?php echo $rsedit->m_name; ?></h4>
                                    </td>
                                    <td style="width: 100px;">
                                        <h4><?php echo $rsedit->m_lname; ?></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p><?php echo $rsedit->m_email; ?></p>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </form>

                    <div class="list_menu_profile">
                        <div class="list-profile">
                            <a href="<?php echo site_url('user/profile'); ?>"><i class="fas fa-user"></i> บัญชีของฉัน</a><br>
                            <a href="<?php echo site_url('cart/showfinal'); ?>"><i class="fas fa-file-invoice-dollar"></i> รายการสั่งซื้อ</a><br>
                            <a href="<?php echo site_url('user/logout'); ?>"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="right_profile">
                    <h3>ข้อมูลของฉัน/แก้ไขข้อมูล <i class="fas fa-edit"></i></h3>
                    <hr class="style1">
                    <form action="<?php echo site_url('insertdata/editdata'); ?>" method="post">
                        <div class="content_right_profile">
                            <table class="table_content_right">
                                <tr>
                                    <td><label>ชื่อ : </label></td>
                                    <td><input type="text" name="m_name" required value="<?php echo $rsedit->m_name; ?>"></td>
                                </tr>
                                <tr>
                                    <td><label>นามสกุล : </label></td>
                                    <td><input type="text" name="m_lname" required value="<?php echo $rsedit->m_lname; ?>"></td>
                                </tr>
                                <tr>
                                    <td><label>เบอร์โทรศัพท์ : </label></td>
                                    <td><input type="text" name="m_tel" required value="<?php echo $rsedit->m_tel; ?>"></td>
                                </tr>
                                <tr>
                                    <td><label>อีเมล : </label></td>
                                    <td><input type="text" name="m_email" required value="<?php echo $rsedit->m_email; ?>"></td>
                                </tr>
                                <tr>
                                    <td><label>รหัสผ่าน : </label></td>
                                    <td><input type="text" name="m_password" required value="<?php echo $rsedit->m_password; ?>"></td>
                                </tr>
                                <tr>
                                    <td><label>ที่อยู่ : </label></td>
                                    <td><textarea rows="3" cols="41" name="m_ads" wrap="hard" class="address"><?php echo $rsedit->m_ads; ?></textarea></td>
                                </tr>

                            </table>
                        </div>

                        <input type="hidden" name="m_id" value="<?php echo $rsedit->m_id; ?>">
                        <button type="submit" class="btn_back">ตกลงการแก้ไขข้อมูล</button>

                    </form>
                </div>
            </div>




            <!-- <div class="col-md-5">
                <h4 style="text-align:center;"> แก้ไขข้อมูล</h4>
                <form action="<?php echo site_url('insertdata/editdata'); ?>" method="post" class="form-hoizontal">

                    <img src="<?php echo base_url('img'); ?>/<?php echo $rsedit->m_img; ?>" width="100px">
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">อีเมล</div>
                        <div class="col-sm-6">
                            <input type="text" name="m_email" required class="form-control" value="<?php echo $rsedit->m_email; ?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-2 control-label">รหัสผ่าน</div>
                        <div class="col-sm-6">
                            <input type="text" name="m_password" required class="form-control" value="<?php echo $rsedit->m_password; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">ชื่อ</div>
                        <div class="col-sm-6">
                            <input type="text" name="m_name" required class="form-control" placeholder="ชื่อ" value="<?php echo $rsedit->m_name; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">นามสกุล</div>
                        <div class="col-sm-6">
                            <input type="text" name="m_lname" required class="form-control" placeholder="สกุล" value="<?php echo $rsedit->m_lname; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">เบอร์โทรศัพท์</div>
                        <div class="col-sm-5">
                            <input type="text" name="m_tel" required class="form-control" placeholder="เบอร์โทรศัพท์" value="<?php echo $rsedit->m_tel; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">ที่อยู่</div>
                        <div class="col-sm-7">
                            <input type="text" name="m_ads" required class="form-control" placeholder="ที่อยู่" value="<?php echo $rsedit->m_ads; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label"></div>
                        <div class="col-sm-5">
                            <input type="hidden" name="m_id" value="<?php echo $rsedit->m_id; ?>">
                            <button type="submit" class="btn btn-primary">ตกลง</button>
                        </div>
                    </div>
                </form>
            </div> -->
        </div>
    </div>
</body>

</html>