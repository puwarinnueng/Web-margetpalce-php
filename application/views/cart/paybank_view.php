    <!-- หน้าเลือกธนาคาร -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transport Comstore</title>
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
                    <h4 style="text-align:center;"> เลือกธนาคาร</h4>
                    <br>
                    <form action="<?php echo site_url('cart/payhome'); ?>" method="post">


                        <div class="form-group row">
                            <div class="col-sm-12 control-label"></div>

                            <div class="col-sm-12">
                               <input type="checkbox" name="p_payment"  value="kasikornbank">
                                กสิกร
                            </div>

                            <div class="col-sm-12">
                               <input type="checkbox" name="p_payment" value="scb">
                                ไทยพาณิชย์
                            </div>

                            <div class="col-sm-12">
                               <input type="checkbox" name="p_payment" value="krungsri">
                                กรุงศรี
                            </div>

                            <div class="col-sm-12">
                               <input type="checkbox" name="p_payment" value="bangkokbank">
                                กรุงเทพ
                            </div>

                            <div class="col-sm-12">
                               <input type="checkbox" name="p_payment" value="krungthai">
                                กรุงไทย
                            </div>

                            <div class="col-sm-12">
                               <input type="checkbox" name="p_payment" value="tmb">
                                ทหารไทย
                            </div>

                            <div class="col-sm-12">
                               <input type="checkbox" name="p_payment" value="promptpay">
                                พร้อมเพย์
                            </div>


                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 control-label"></div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">ตกลง</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>