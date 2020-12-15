<!-- หน้าแสดงผลหลังจากที่กดพิมใส่ search box แล้วกด search แล้วมีสินค้าที่หา -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Com Store</title>
    <link rel="stylesheet" href="Home_view.php">
</head>

<style>
   .body {
        margin: 0;
        padding: 0;
        font-family: 'Prompt', sans-serif;
        display: flex;
    }

    .card-product {
        position: relative;
        width: 220px;
        height: 300px;
        background: #20b7d5;
        border-radius: 20px;
        overflow: hidden;
    }

    .card-product::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #b9d6f2;
        clip-path: circle(110px at 80% 20%);
        transition: 0.5s ease-in-out;
    }

    .card-product:hover:before {
        clip-path: circle(250px at 80% -20%);
    }

    .card-product .imgBx {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 20px;
        z-index: 1;
    }

    .card-product .imgBx img {
        width: 90%;
        transition: 0.5s;
    }

    .card-product:hover .imgBx img {
        max-width: 70%;
        top: 0%;
        transform: translate(0%);
    }

    .card-product .contentBx {
        position: relative;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-direction: column;
        z-index: 1;
    }

    .card-product .contentBx .brand input {
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        height: auto;
        text-transform: uppercase;
        padding: 0;
        border: none;
        background: none;
    }

    .card-product .contentBx .brand input:hover {
        color: #003559;
        font-weight: bold;
        text-decoration: none;
    }

    .card-product .contentBx .price {
        color: #003559;
        font-size: 15px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: -8%;
    }

    .card-product .contentBx .buy {
        position: relative;
        padding: 10px 20px;
        margin-top: 15px;
        color: #003559;
        text-decoration: none;
        background: #f6f6f6;
        border-radius: 30px;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 200;
        transition: 0.5s;
        top: 0px;
        opacity: 0;
        margin: auto;
    }

    .card-product .contentBx .buy input{
        border: none;
        background: #f6f6f6;
    }

    .card-product:hover .contentBx .buy {
        top: 0px;
        opacity: 1;
    }

    .card-product:hover .contentBx .buy input{
        border: none;
        background: #f6f6f6;
    }
</style>

<body style="text-align:center;">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <br>
    <h1>Search Result : </h1>
    <br>
    <div class="container">
        <div class="row">
            <?php foreach ($query as $rs) { ?>
            <form action="<?php echo site_url('search/search_product_detail'); ?>" method="post" >
            <div class="col-md-3">
                <div class="card-product">
                    <div class="imgBx">
                        <img src="<?php echo base_url('img'); ?>/<?php echo $rs->p_img; ?>"></a>
                    </div>
                    <div class="contentBx">
                        <div class="brand">
                            <input type="hidden" name="prod_id" value="<?php echo $rs->p_id; ?>"></input>
                            <input type="submit"  value="<?php echo $rs->p_name; ?>"></input>
                        </div>
                        <br><br>
                        <h2 class="price"><?php echo $rs->p_price; ?>-</h2>
                        <div class="buy">
                            <input type="hidden" name="prod_id" value="<?php echo $rs->p_id; ?>"></input>
                            <input type="submit" value="เพิ่มใส่รถเข็น" formaction="<?php echo site_url('search/search_product_cart'); ?>"></input>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <?php } ?>
        </div>
    </div>
</body>

</html>