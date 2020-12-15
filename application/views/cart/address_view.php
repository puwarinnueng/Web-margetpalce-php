   <!-- หน้าระบุที่อยู่ -->
   <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>
   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>ที่อยู่จัดส่ง</title>
   </head>

   <body>
       <div class="container">
           <div class="row">
               <div class="col-md-8">
                   <div class="show_address">
                       <h1>ที่อยู่ในการจัดส่ง</h1>
                       <hr class="style11">
                       <div class="form_show_address">
                           <form action="<?php echo site_url('cart/add_address'); ?>" method="post">
                               <label>กรุณากรอกที่อยู่ในการจัดส่ง</label><br>
                               <textarea rows="10" cols="50" name="p_address" wrap="hard" class="address"></textarea>

                               <table class="table-btn-address">
                                   <tr>
                                       <td><a href="<?php echo site_url('cart/showcart') ?>" class="btn_select"><i class="fa fa-chevron-left" aria-hidden="true"></i> ย้อนกลับ</a></td>
                                       <td><button type="submit" class="next">ดำเนินการต่อ <i class="fa fa-chevron-right" aria-hidden="true"></i></button></td>
                                   </tr>
                               </table>
                           </form>
                       </div>
                   </div>
               </div>


               <div class="col-md-3">
                   <div class="result_order">
                       <h3>สรุปการสั่งซื้อ</h3><hr>
                       <div class="sum_result_order">
                           <div class="sum_result2">
                               <p>ข้อมูลลูกค้า</p>
                               <table class="table_content_sum">
                                   <tr>
                                       <td><label>ชื่อ </label></td>
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
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </body>

   <!-- <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h4 style="text-align:center;"> รายละเอียด</h4>

               <?php foreach ($query2 as $rs) {

                    echo '<b>';
                    echo 'ชื่อ.....';
                    echo $rs->m_name;
                    echo '</b>';
                    echo '<br>';
                    echo '<b>';
                    echo 'อีเมล.....';
                    echo $rs->m_email;
                    echo '</b>';
                    echo '<br>';
                    echo '<b>';
                    echo 'เบอร์โทร.....';
                    echo $rs->m_tel;
                    echo '</b>';
                } ?>

           </div>
       </div>
   </div> -->

   </html>