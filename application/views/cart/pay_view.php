   <!-- เลือกวิธีการชำระเงิน -->
   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Address Comstore</title>
   </head>

   <style>
       .no1 input {
           height: 100px;
           width: 1000px;
       }
   </style>

   <body>
       <div class="container">
           <div class="row">


               <div class="col-md-12">
                   <br>
                   <br>
                   <h4 style="text-align:center;"> เลือกวิธีการชำระเงิน</h4>
                   <br>
                   <form action="<?php echo site_url('cart/payhome'); ?>" method="post">
                       <div class="form-group row">
                           <div class="col-sm-12 control-label"></div>
                           <div class="col-sm-12">

                               <button type="submit" value="p_payment.png" name="p_payment" class="btn btn-primary">ชำระเงินปลายทาง</button>

                           </div>
                       </div>
                   </form>

                   <form action="<?php echo site_url('cart/select_paybank'); ?>" method="post">
                       <div class="form-group row">
                           <div class="col-sm-12 control-label"></div>
                           <div class="col-sm-12">

                               <button type="submit" value="" name="" class="btn btn-primary">ชำระผ่านบัญชีธนาคาร</button>

                           </div>
                       </div>
                   </form>


               </div>
           </div>
       </div>
   </body>


   <div class="container">
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
   </div>

   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h4 style="text-align:center;"> </h4>

               <?php foreach ($query3 as $r3) {

                    echo '<b>';
                    echo 'ที่อยู่.....';
                    echo $r3->p_address;
                    echo '</b>';
                    echo '<br>';
                    echo '<b>';
                    echo 'ขนส่งโดย.....';
                    echo $r3->p_tran;
                    echo '</b>';
                  
                    
                } ?>

           </div>
       </div>
   </div>

   </html>