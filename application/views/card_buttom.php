<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row row1">
            <div class="col-md-8">
                <div class="card_button">
                    <table class="card_buttom_table">
                        <tr>
                            <td><i class="fas fa-comments" id="help_icon"></i> ช่วยเหลือตลอด 24 ชม.</td>
                            <td><i class="fas fa-thumbs-up" id="thumbs_up_icon"></i> รับประกันสินค้า 100%</td>
                            <td><i class="fas fa-credit-card" id="creditcard_icon"></i> ชำระเงินได้หลายช่องทาง</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<style>
    .card_buttom_table {
        border-collapse: collapse;
        width: 700px;
        border: 2px solid #003559;
        font-size: 14px;
        margin-left: 30%;
        margin-top: 5%;
    }

    .card_buttom_table td {
        border-collapse: collapse;
        border: 2px solid #003559;
        font-size: 14px;
        text-align: center;
        padding:40px 15px;
        vertical-align: text-bottom;
    }

    #help_icon{
        font-size: 45px;
        color: #ff9d47;
        align-items: center;
    }

    #creditcard_icon{
        font-size: 45px;
        color: #ff9d47;
    }

    #thumbs_up_icon{
        font-size: 45px;
        color: #ff9d47;
        align-items: center;
    }
</style>