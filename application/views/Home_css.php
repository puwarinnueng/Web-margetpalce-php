<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">


<!-- brandner -->
<style>
    #slider {
        margin: 0 auto;
        margin-top: 3%;
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

    #bullets label:hover {
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

<!-- เส้นคั่น -->
<style>
    hr.style1 {
        border-top: 2px solid #ff9d47;
        width: 70%;
        margin-left: 14%;
    }

    .Head_title {
        font-size: 26px;
        color: #003559;
        font-weight: bold;
        text-align: center;
        margin-top: 3%;
    }
</style>

<!-- list card product -->
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
        flex-direction: column;
        z-index: 1;
    }

    .card-product .contentBx .brand a {
        font-size: 12px;
        font-weight: bold;
        color: #fff;
    }

    .card-product .contentBx .brand a:hover {
        color: #003559;
        font-weight: bold;
        text-decoration: none;
    }

    .card-product .contentBx .price {
        color: #003559;
        font-size: 22px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
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
    }

    .card-product:hover .contentBx .buy {
        top: 0px;
        opacity: 1;
    }
</style>