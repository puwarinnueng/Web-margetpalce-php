<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<!-- cart_view1 -->
<style>
    hr.style1 {
        border-top: 2px solid #ff9d47;
        width: 70%;
        margin-left: 14%;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Prompt', sans-serif;
    }

    html,
    body {
        height: 100%;
        width: 100%;
    }

    .confirm_select {
        margin-top: 40px;
        padding: 10px 100px;
    }

    .confirm_select h1 {
        font-weight: bold;
        color: #003559;
    }

    .table_confirm_select {
        text-align: center;
        border-collapse: collapse;
        width: 100%;
        margin-top: 5%;
    }

    .table_confirm_select th {
        font-size: 16px;
        font-weight: 600;
        padding: 10px 20px;
        border-bottom: 2px solid #003559;
    }

    .frist_row td {
        height: 100px;
        padding: 10px 0;
        border-bottom: 2px solid #003559;
    }

    .table_confirm_select td img {
        width: 100px;
        height: 100px;

    }

    .table_confirm_select td {
        font-size: 14px;
        font-weight: 300;
    }

    .second_row td {
        padding: 50px 0px;
    }

    .confirm {
        color: #fff;
        background: #20b7d5;
        padding: 15px 20px;
        border-radius: 55px;
        font-size: 16px;
        font-weight: 700;
    }

    .confirm:hover {
        text-decoration: none;
        background: #ff9d47;
        color: #fff;
    }

    .back_home {
        color: #20b7d5;
        font-size: 16px;
        border: 3px solid #20b7d5;
        padding: 10px 20px;
        border-radius: 55px;
    }

    .back_home:hover {
        text-decoration: none;
        color: #ff9d47;
        border: 3px solid #ff9d47;
    }
</style>

<!-- cart_view2 -->
<style>
    .confirm_select_2 {
        margin-top: 40px;
        padding: 10px 250px;
    }

    .form_confirm_select_2 {
        border: 3px solid #003559;
        margin-top: 5%;
        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);
    }

    .confirm_select_2 h1 {
        font-weight: bold;
        color: #003559;
    }

    .img_confirm img {
        width: 150px;
        height: 150px;
        margin-top: 5%;
    }

    .table_confirm_2 {
        border-collapse: collapse;
        width: 100%;
        /* margin-left: 25%; */
    }

    .all_table {
        padding: 10px 90px;
    }

    .table_confirm_2 input {
        width: 100%;
        padding: 0 10px;
        line-height: 30px;
        font-size: 14px;
        outline: none;
        border: none;
        /* border: 3px solid #003559; */

    }

    .table_confirm_2 label {
        line-height: 50px;
        font-size: 16px;
    }

    .table-btn {
        border-collapse: collapse;
        width: 100%;
        margin-top: 5%;
        text-align: center;
        margin-bottom: 5%;
    }

    .back_home1 {
        color: #20b7d5;
        font-size: 16px;
        border: 3px solid #20b7d5;
        padding: 10px 20px;
        border-radius: 55px;
    }

    .back_home1:hover {
        text-decoration: none;
        color: #ff9d47;
        border: 3px solid #ff9d47;
    }

    .addtocart1 {
        color: #fff;
        background: #20b7d5;
        font-size: 16px;
        padding: 13px 20px;
        border-radius: 55px;
        border: none;
        font-weight: 700;
    }

    .addtocart1:hover {
        text-decoration: none;
        background: #ff9d47;
        color: #fff;
    }
</style>

<!-- หน้ารถเข็น -->
<style>
    .cart_show_order {
        /* border: 3px solid #003559; */
        margin-top: 5%;
        margin-left: 12%;
        margin-bottom: 20%;
    }

    .cart_show_order h1 {
        text-align: left;
        font-weight: bold;
        color: #003559;
        padding-top: 10px;
    }

    .style11 {
        border-top: 2px solid #ff9d47;
        width: 100%;
    }


    .table_show_order {
        border-collapse: collapse;
        width: 100%;
        margin-top: 8%;
    }

    .table_show_order th {
        border-bottom: 2px solid #003559;
        padding: 5px 0px;
        font-size: 16px;
        font-weight: 600;
    }

    .table_show_order td {
        /* border: 1px solid #003559; */
        border-bottom: 2px solid #dddddd;
        padding: 15px 0px;
        font-size: 14px;
    }

    .fas {
        color: #003559;
    }

    .fas:hover {
        color: #ff9d47;
    }

    .result_order {
        border: 3px solid #ff9d47;
        margin-top: 33%;
        padding: 15px;
        padding-bottom: 30px;
    }

    .result_order h3 {
        margin-top: 5%;
        font-weight: 600;
    }

    .sum_result1 {
        padding-top: 15px;
        font-size: 14px;
        font-weight: 300;
        text-align: left;
    }

    .sum_result1 label {
        font-size: 14px;
        font-weight: 300;
        padding-right: 90px;
    }


    .sum_result_bold {
        font-size: 18px;
        font-weight: 600;
        color: red;
        padding-top: 15px;
        text-align: left;
    }

    .sum_result_bold label {
        font-size: 18px;
        font-weight: 600;
        color: red;
        padding-right: 40px;

    }

    .sum_result p {
        text-align: right;
    }

    .btn_buy {
        margin-top: 15%;
        padding: 12px 20px;
        width: 150px;
        font-size: 14px;
        font-weight: 700;
        border: none;
        border-radius: 55px;
        background: #003559;
        color: #fff;
        outline: none;
    }

    .btn_buy:hover {
        background: #20b7d5;
        outline: none;
    }

    .btn_buy:visited {
        outline: none;
    }

    .btn_buy_product a {
        padding: 12px 35px;
        width: 200px;
        font-size: 14px;
        border: none;
        border-radius: 55px;
        color: #003559;
        background: #dddddd;

    }

    .btn_buy_product a:hover {
        background: #b9d6f2;
        text-decoration: none;
        outline: none;
    }
</style>

<!-- address_view -->
<style>
    .show_address {
        /* border: 3px solid #003559; */
        margin-top: 5%;
        margin-left: 12%;
        margin-bottom: 20%;
    }

    .show_address h1 {
        text-align: left;
        font-weight: bold;
        color: #003559;
        padding-top: 10px;
    }

    .form_show_address {
        border: 2px solid #003559;
        padding: 20px 30px;
        margin-top: 5%;
        height: 450px;
    }

    .form_show_address label {
        font-size: 18px;
        font-weight: 700;
    }

    .form_show_address textarea {
        padding: 20px 30px;
        font-weight: 300;
        font-size: 14px;
        margin-top: 3%;
    }

    .table-btn-address {

        width: 330px;
        text-align: center;
        margin-top: 10%;
        margin-left: 43%;
    }

    .table-btn-address a {
        padding: 12px 35px;
        width: 200px;
        font-size: 14px;
        border: none;
        border-radius: 55px;
        color: #003559;
        background: #dddddd;
    }

    .table-btn-address a:hover {
        background: #b9d6f2;
        text-decoration: none;
        outline: none;
    }

    .next {
        padding: 12px 20px;
        width: 150px;
        font-size: 14px;
        font-weight: 700;
        border: none;
        border-radius: 55px;
        background: #003559;
        color: #fff;
        outline: none;
    }

    .next:hover {
        background: #20b7d5;
        outline: none;
    }

    .sum_result2 p {
        font-size: 15px;
        font-weight: 600;
        padding: 5px 0px;
        text-align: left;
        margin-top: 5%;
        /* color: #ff9d47; */
    }

    .table_content_sum {
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed;
    }

    .table_content_sum label {
        font-weight: 300;
    }

    .table_content_sum td {
        /* border: 3px solid #003559; */
        font-size: 12px;
        word-wrap: break-word;
    }

    .result_order hr {
        border-top: 2px solid #dddddd;
    }
</style>

<!-- tran_view -->
<style>
    .form_show_trans {
        border: 2px solid #003559;
        padding: 0px 30px;
        margin-top: 5%;
        height: 350px;

    }

    .transparant {
        /* border: 3px solid #003559; */
        height: 220px;
        text-align: left;
        padding: 0px 20px;
    }

    .transparant_kerry img {
        width: 110px;
        height: 100px;
        padding-left: 10px;
    }

    .transparant_dhl img {
        width: 120px;
        height: 80px;
    }

    .table_content_sum2 {
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed;
        font-size: 12px;
    }

    .table_content_sum2 td{
        word-wrap:break-word
        
    }

    .table_content_sum2 label{
        text-align: left;
    }
</style>