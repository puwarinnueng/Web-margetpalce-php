<?php echo link_tag('css/style.css'); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">

<!-- <style>
    body{
        margin: 0;
        padding: 0;
        height: 100vh;
        /* display: ; */
        justify-content: center;
        align-items: center;

    }
    .slider {
        width: 800px;
        height: 500px;
        overflow: hidden;
    }

    .slides {
        width: 500%;
        height: 500px;
        display: flex;

    }

    .slides input {
        display: none;
    }

    .slide {
        width: 20%;
        transition: 2s;

    }

    .slide img {
        width: 800px;
        height: 500px;
        
    }


    /* css for manual slide navigation */
    .navigation-manual {
        position: absolute;
        width: 200px;
        margin-top: -40px;
        margin-left: 650px;
        display: flex;
        justify-content: center;
    }

    .manual-btn {
        border: 2px solid #ff9d47;
        padding: 5px;
        border-radius: 10px;
        cursor: pointer;
        transition: 1s;

    }

    .manual-btn:not(last-child) {
        margin-right: 20px;
    }

    .manual-btn:hover {
        background: #ff9d47;

    }

    #radio1:checked~.first {
        margin-left: 0;
    }

    #radio2:checked~.first {
        margin-left: -20%;
    }

    #radio3:checked~.first {
        margin-left: -40%;
    }
</style> -->

<style>
    #slider {
        margin: 0 auto;
        width: 1080px;
        max-width: 100%;
        text-align: center;
    }

    #slider input[type=radio] {
        display: none;
    }

    #slider label {
        cursor: pointer;
        text-decoration: none;
    }

    #slides {
        padding: 10px;
        height: 360px;
        border: 3px solid #ccc;
        background: #fff;
        position: relative;
        z-index: 1;
    }

    #overflow {
        width: 100%;
        overflow: hidden;
    }

    #slide1:checked~#slides .inner {
        margin-left: 0;
    }

    #slide2:checked~#slides .inner {
        margin-left: -100%;
    }

    #slide3:checked~#slides .inner {
        margin-left: -200%;
    }

    #slide4:checked~#slides .inner {
        margin-left: -300%;
    }

    #slides .inner {
        transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
        width: 400%;
        line-height: 300px;
        /* height: 300px; */
    }

    #slides .slide {
        width: 25%;
        float: left;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        color: #fff;
    }

    /* #slides .slide_1 {
        background: #00171F;
    }

    #slides .slide_2 {
        background: #003459;
    }

    #slides .slide_3 {
        background: #007EA7;
    }

    #slides .slide_4 {
        background: #00A8E8;
    } */

    #controls {
        margin: -180px 0 0 0;
        width: 100%;
        height: 50px;
        z-index: 2048;
        position: relative;

    }

    #controls label {
        transition: opacity 0.2s ease-out;
        display: none;
        width: 50px;
        height: 50px;
        opacity: .4;
    }

     #controls label:hover {
        opacity: 1;

    }

    #slide1:checked~#controls label:nth-child(2),
    #slide2:checked~#controls label:nth-child(3),
    #slide3:checked~#controls label:nth-child(4),
    #slide4:checked~#controls label:nth-child(1) {
        background: url(https://image.flaticon.com/icons/svg/130/130884.svg) no-repeat;
        float: right;
        margin: 0 0 10px 0;
        display: block;
    }

    #slide1:checked~#controls label:nth-last-child(1),
    #slide2:checked~#controls label:nth-last-child(4),
    #slide3:checked~#controls label:nth-last-child(3),
    #slide4:checked~#controls label:nth-last-child(2) {
        background: url(https://image.flaticon.com/icons/svg/130/130882.svg) no-repeat;
        float: left;
        margin: 0 10px 0 0;
        display: block;
    }

    #bullets {
        margin: 140px 0 0;
        text-align: center;
    }

    #bullets label {
        display: inline-flex;
        border: 2px solid #40D3DC;
        padding: 5px;
        border-radius: 100%;
        cursor: pointer;
        transition: 1s; 
        margin: 0 10px;

    }

    #bullets label:hover{
       background: #40D3DC;
    }

    #slide1:checked~#bullets label:nth-child(1),
    #slide2:checked~#bullets label:nth-child(2),
    #slide3:checked~#bullets label:nth-child(3),
    #slide4:checked~#bullets label:nth-child(4) {
        background: #40D3DC;
    }

    @media screen and (max-width: 900px) {

        #slide1:checked~#controls label:nth-child(2),
        #slide2:checked~#controls label:nth-child(3),
        #slide3:checked~#controls label:nth-child(4),
        #slide4:checked~#controls label:nth-child(1),
        #slide1:checked~#controls label:nth-last-child(2),
        #slide2:checked~#controls label:nth-last-child(3),
        #slide3:checked~#controls label:nth-last-child(4),
        #slide4:checked~#controls label:nth-last-child(1) {
            margin: 0px;
        }

        #slides {
            max-width: calc(100% - 140px);
            margin: 0 auto;
        }
    }
</style>