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

                               <button type="submit" value="cash_on_delivery" name="p_payment" class="btn btn-primary">ชำระเงินปลายทาง</button>

                           </div>
                       </div>

                       <div class="form-group row">
                           <div class="col-sm-12 control-label"></div>
                           <div class="col-sm-12">

                               <button type="submit" value="home" name="" class="btn btn-primary">ชำระผ่านบัญชีธนคาร</button>

                           </div>
                       </div>



                   </form>
               </div>
           </div>
       </div>
   </body>

   </html>