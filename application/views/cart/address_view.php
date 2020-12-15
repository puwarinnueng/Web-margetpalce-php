   <!-- หน้าระบุที่อยู่ -->
   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Address Comstore</title>
   </head>

   <style>
       .no input {
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
                   <h4 style="text-align:center;"> ระบุที่อยู่ของคุณ</h4>
                   <br>
                   <form action="<?php echo site_url('cart/add_address'); ?>" method="post">


                       <div class="form-group row">
                           <div class="col-sm-12 control-label"> </div>

                           <div class="col-sm-12">
                               <div class="no">
                                   <input type="text" name="p_address" required>
                               </div>
                           </div>

                       </div>

                       <div class="form-group row">
                           <div class="col-sm-12 control-label"></div>
                           <div class="col-sm-12">
                               <button type="submit" class="btn btn-primary">ชำระเงิน</button>
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
               <h4 style="text-align:center;"> ชื่อ</h4>

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

   </html>