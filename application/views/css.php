<?php echo link_tag('css/style.css'); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<style>
    #flipkart-navbar {
        background-color: #003559;
        color: #FFFFFF;
        font-family: 'Prompt', sans-serif;
    }

    .row1 {
        padding-top: 35px;
        padding-right: 50px;
    }

    .row2 {
        padding-bottom: 0px;
    }

    .flipkart-navbar-input {
        padding: 11px 16px;
        border-radius: 2px 0 0 2px;
        border: 0 none;
        outline: 0 none;
        font-size: 15px;
    }

    .flipkart-navbar-button {
        background-color: #ffe11b;
        border: 1px solid #ffe11b;
        border-radius: 0 2px 2px 0;
        color: #565656;
        padding: 10px 0;
        height: 43px;
        cursor: pointer;
    }

    .cart-button {
        background-color: #2469d9;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
        padding: 10px 0;
        text-align: center;
        height: 41px;
        border-radius: 2px;
        font-weight: 500;
        width: 100px;
        display: inline-block;
        color: #FFFFFF;
        text-decoration: none;
        color: inherit;
        border: none;
        outline: none;
    }

    .cart-button2 {
        background-color: black;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
        padding: 10px 0;
        text-align: center;
        height: 25px;
        border-radius: 2px;
        font-weight: 500;
        width: 120px;
        display: inline-block;
        color: #FFFFFF;
        text-decoration: none;
        color: inherit;
        border: none;
        outline: none;
    }

    .cart-button:hover {
        text-decoration: none;
        color: #fff;
        cursor: pointer;
    }

    .cart-svg {
        display: inline-block;
        width: 16px;
        height: 16px;
        vertical-align: middle;
        margin-right: 8px;

    }

    .item-number {
        border-radius: 3px;
        background-color: rgba(0, 0, 0, .1);
        height: 20px;
        padding: 3px 6px;
        font-weight: 500;
        display: inline-block;
        color: #fff;
        line-height: 12px;
        margin-left: 10px;
    }

    .upper-links {
        display: inline-block;
        padding: 0 11px;
        line-height: 23px;
        letter-spacing: 0;
        color: inherit;
        border: none;
        outline: none;
        font-size: 12px;
    }

    .links {
        color: #fff;
        text-decoration: none;
    }

    .links:hover {
        color: #fff;
        text-decoration: none;
    }

    .profile-links {
        font-size: 12px;
        border-bottom: 1px solid #e9e9e9;
        box-sizing: border-box;
        display: block;
        padding: 0 11px;
        line-height: 23px;
    }

    .profile-li {
        padding-top: 2px;
    }

    .largenav {
        display: none;
    }

    .smallnav {
        display: block;
    }

    .smallsearch {
        margin-left: 15px;
        margin-top: 15px;
    }

    .menu {
        cursor: pointer;
    }

    @media screen and (min-width: 768px) {
        .largenav {
            display: block;
        }

        .smallnav {
            display: none;
        }

        .smallsearch {
            margin: 0px;
        }
    }

    /*Sidenav*/
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #fff;
        overflow-x: hidden;
        transition: 0.5s;
        box-shadow: 0 4px 8px -3px #555454;
        padding-top: 0px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        color: #fff;
    }

    @media screen and (max-height: 450px) {
        .sidenav a {
            font-size: 18px;
        }
    }

    .sidenav-heading {
        font-size: 36px;
        color: #fff;
    }
</style>


<!-- ปุ่ม Search -->
<style>
    body {
        font-family: 'Prompt', sans-serif;
    }

    .box-Container {

        position: relative;
        padding: 20px 50px;
    }

    .wrapper {
        position: absolute;
        top: 4%;
        left: 53%;
        transform: translate(-50%, -50%);
    }

    .box-input {
        width: 490px;
        border: 3px solid #fff;
        background: transparent;
        padding: 8px 35px;
        border-radius: 50px;
        color: #fff;
        font-size: 12px;
        outline: none;
    }

    ::-webkit-input-placeholder {
        color: #fff;
        text-transform: uppercase;

    }

    ::-moz-input-placeholder {
        color: #fff;
        text-transform: uppercase;

    }

    ::-ms-input-placeholder {
        color: #fff;
        text-transform: uppercase;

    }

    .close-btn {
        position: absolute;
        top: 21px;
        right: 50px;
        cursor: pointer;
        width: 100px;
        height: 39px;
        background: #fff;
        color: #FF8E2B;
        border: none;
        border-radius: 50px;
        outline: none;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 12px;

    }

    .box-Container span {
        position: absolute;
        left: 12%;
        top: 39%;
        line-height: 100px;
        font-size: 12px;
        color: #fff;

    }
</style>


<!-- ปุ่มรถเข็น -->
<style>
    .addtocart {

        position: relative;
        /* transform: translate(-50%, -50%); */

    }

    .add_to_cart {
        padding: 0px 10px;
        position: absolute;
        vertical-align: middle;
        color: #fff;
        font-size: 26px;
        display: inline-block;
        
    }

    .add_to_cart:hover,
    .add_to_cart:active {
        color: #ff9d47;
    }
</style>


<!-- ปุ่มเข้าสู่ระบบ -->
<style>
    .drop_btn {
        color: white;
        font-size: 12px;
        border: none;
        cursor: pointer;
        background-color: Transparent;
        background-repeat: no-repeat;
        overflow: hidden;
        outline: none;
    }

    .drop_btn:hover,
    .drop_btn:active {
        color: #ff9d47;
    }

    .dropdown {
        position: relative;
        display: inline-block;

    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 130px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        font-size: 12px;
        align-items: center;
    }

    .dropdown-content a {
        color: black;
        padding: 10px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ff9d47
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #FF8E2B;
    }

    .icon_profile {
        font-size: 18px
    }
</style>


<!-- หมวดหมู่ -->
<style>
    .dropbtn {
        background-color: #00b4d8;
        color: white;
        padding: 5px 20px;
        font-size: 14px;
        border: none;
        cursor: pointer;
        min-width: 200px;
        height: 33px;
        color: #fff;
        font-weight: bold;
    }

    .dropdown-group {
        position: relative;
        display: inline-block;
    }

    .dropdown-content-group {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        font-size: 14px;
        color: #003559;
    }

    .dropdown-content-group a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;

    }

    .dropdown-content-group a:hover {
        background-color: #ff9d47
    }

    .dropdown-group:hover .dropdown-content-group {
        display: block;
    }

    .dropdown-group:hover .dropbtn {
        background-color: #ff9d47;
    }

    #hamburger {
        padding: 0px 10px;
        float: left;
        font-size: 21px;

    }
</style>


    <!-- แถบเมนู -->
<style>
    .bar-list-menu ul {
        list-style: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .bar-list-menu li {
        float: left;

    }

    .bar-list-menu li a {
        display: block;
        padding: 7px 15px;
        color: #fff;
        text-align: center;
        text-decoration: none;
        font-size: 13px;
    }

    .active {
        background: #00b4d8;
        border-radius: 7px 7px 0px 0px;

    }

    .bar-list-menu ul li :hover {
        background: #ff9d47;
        color: #003559;
        border-radius: 7px 7px 0px 0px;
    }

    #home {
        font-size: 16px;

    }

    .dropdown_icon {
        font-size: 17px;

    }

    .bar-list-menu .fa {
        margin-right: 6px;
        margin-left: 6px;
    }

/* ----------- submenu----------------- */
    .sub-menu1 {
        display: none;
        z-index: 3000;
    }

    .bar-list-menu ul li:hover .sub-menu1 {
        display: block;
        position: absolute;
        background: #ff9d47;
        width: 144px;
    }

     .sub-menu1 li a:hover{
        color: #003559;
        background: #ff9d47;

    }

    .sub-menu2 {
        display: none;
        z-index: 3000;
    }

    .bar-list-menu ul li:hover .sub-menu2 {
        display: block;
        position: absolute;
        background: #ff9d47;
        width: 120px;
    }

     .sub-menu2 li a:hover{
        color: #003559;
        background: #ff9d47;

    }


</style>