   <!-- เลือกวิธีการชำระเงิน -->
   <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>
   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>เลือกวิธีชำระเงิน</title>
   </head>

   <body>
       <div class="container">
           <div class="row">
               <div class="col-md-8">
                   <div class="show_address">
                       <h1>เลือกวิธีการชำระเงิน</h1>
                       <hr class="style11">
                       <div class="form_show_payment">
                           <table class="table_show_payment">
                               <tr>
                                   <td>
                                       <form action="<?php echo site_url('cart/payhome'); ?>" method="post" class="form_show_COD">
                                           <button type="submit" value="p_payment.png" name="p_payment" class="btn_show_COD"><i class="fas fa-money-bill-wave"></i>
                                               <br>ชำระเงินปลายทาง</button>
                                       </form>
                                   </td>
                                   <td>
                                       <form action="<?php echo site_url('cart/select_paybank'); ?>" method="post" class="form_show_bank">
                                           <button type="submit" value="" name="" class="btn_show_cash"><i class="fas fa-landmark"></i>
                                               <br>ชำระผ่านบัญชีธนาคาร</button>
                                       </form>
                                   </td>
                               </tr>
                           </table>
                           <table class="table-btn-trans">
                               <tr>
                                   <td><a href="<?php echo site_url('cart/tran') ?>" class="btn_select"><i class="fa fa-chevron-left" aria-hidden="true"></i> ย้อนกลับ</a></td>
                               </tr>
                           </table>
                       </div>
                   </div>
               </div>

               <div class="col-md-3">
                   <div class="result_order">
                       <h3>สรุปการสั่งซื้อ</h3>
                       <hr>
                       <div class="sum_result_order">
                           <div class="sum_result2">
                               <p>ข้อมูลลูกค้า</p>
                               <table class="table_content_sum">
                                   <tr>
                                       <td style="width: 80px;"><label>ชื่อ </label></td>
                                       <td><?php foreach ($query2 as $rs) {
                                                echo $rs->m_name;
                                            } ?>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td><label>อีเมล </label></td>
                                       <td><?php foreach ($query2 as $rs) {
                                                echo $rs->m_email;
                                            } ?>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td><label>เบอร์โทรศัพท์</label></td>
                                       <td><?php foreach ($query2 as $rs) {
                                                echo $rs->m_tel;
                                            } ?>
                                       </td>
                                   </tr>
                               </table>
                               <p>รายละเอียดการจัดส่ง</p>
                               <table class="table_content_sum2">
                                   <tr>
                                       <td><?php foreach ($query3 as $r3) {
                                                echo $r3->p_address;
                                            } ?>
                                       </td>
                                   </tr>
                               </table>
                               <p>บริการจัดส่งโดย</p>
                               <table class="table_content_sum3">
                                   <tr>
                                       <td><?php foreach ($query3 as $r3) {
                                                echo $r3->p_tran;
                                            } ?>
                                       </td>
                                   </tr>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </body>
   </html>