<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<!-- ข้อมูลทางซ้ายมือ -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body,
    input {
        font-family: 'Prompt', sans-serif;
    }

    .left_profile {
        width: 300px;
        height: 560px;
        border: 3px solid #003559;
        margin-top: 10%;
        margin-left: 15%;
        padding: 20px;
    }

    .img_profile img {
        border-radius: 50%;
        width: 120px;
        height: 120px;
    }

    .img_profile {
        text-align: center;
    }

    .table_content_left {
        margin-top: 6%;
        align-content: center;
        align-items: center;
        text-align: center;
    }

    .table_content_left td {
        /* border: 2px solid black; */
        text-align: center;
        font-size: 12px;
        width: 50%;
    }

    .col {
        width: 300px;
    }

    .table_content_left h4 {
        font-size: 16px;
        font-weight: 700;
    }

    .list_menu_profile {
        font-size: 16px;
        text-align: left;
        width: 50%;
        margin-left: 10%;
        margin-top: 5%;
        line-height: 40px;
    }

    .list-profile a {
        color: black;
    }

    .list-profile a:hover {
        color: #20b7d5;
        outline: none;
        text-decoration: none;
    }

    .list-profile a:focus {
        color: #ff9d47;
    }
</style>

<!-- ข้อมูลทางขวามือ(แก้ไขชื่อ) -->
<style>
    .right_profile {
        border: 3px solid #003559;
        padding: 30px 50px;
        margin-top: 5.5%;
        max-width: 100%;
    }

    .right_profile h3 {
        font-size: 18px;
        font-weight: 700;
        text-align: center;
    }

    .content_right_profile {
        margin-top: 5%;
    }

    .table_content_right {
        margin-left: 5%;
    }

    .table_content_right label {
        font-size: 14px;
        font-weight: 500;
    }

    .table_content_right td {
        width: 350px;
        /* border: 1px solid #003559; */
        line-height: 40px;
    }

    .table_content_right td:first-child {
        width: 120px;
        line-height: 40px;
    }

    .table_content_right input {
        font-size: 12px;
        color: black;
        width: 350px;
        height: 35px;
        padding: 0px 20px;
        border-radius: 55px;
        border: 2px solid #b9d6f2;
        padding: 0px 20px;
        outline: none;

    }

    .btn_back {
        border: none;
        width: 200px;
        height: 50px;
        padding: 3px;
        border-radius: 55px;
        background: #003559;
        color: #fff;
        outline: none;
        z-index: 1;
        -webkit-box-shadow: 0 12px 34px rgba(0, 0, 0, 0.12);
        margin-top: 5%;
        font-size: 14px;
    }

    .address {
        font-size: 12px;
        font-weight: lighter;
        padding: 0px 20px;
        border-radius: 10px;
        border: 2px solid #b9d6f2;
        margin-top: 3%;
    }
    .address:hover{
        outline: none;
        text-decoration: none;
    }

    .address:active{
        outline: none;
        text-decoration: none;
        border: none;
    }

</style>