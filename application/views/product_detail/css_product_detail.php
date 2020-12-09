<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<style>
    * {
        margin: 0;
        padding: 0;
    }

    html {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 0;
        padding: 0;
        height: 100hv;
        /* align-items: center;
        align-content: center; */
        font-family: 'Prompt', sans-serif;

    }

    .card_product_detail {
        background: #f6f6f6;
        height: 95%;
        width: 100%;
        padding: 20px;
        border: 4px solid #DEDDDD;
        display: flex;
        margin-top: 3%;
        margin-left: 5%;

    }

    .card_product_detail .img_detail,
    .card_product_detail .infos {
        width: 50%;
    }


    .infos {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: clip;

    }

    .infos p {
        text-align: left;
        font-size: 12px;
    }

    .name_detail {
        font-size: 24px;
        font-weight: bold;
        text-align: left;
    }

    .price_detail {
        font-size: 21px;
        font-weight: bold;
        text-align: left;
        color: red;
    }

    .guarantee {
        text-align: left;
    }

    .buttons_detail {
        height: 50px;
        width: 150px;
        align-items: center;
        align-content: center;
        font-size: 16px;
        font-weight: bold;
        border: none;
        background: #ff9d47;
        border-radius: 10px;
    }

    .buttons_detail a {
        color: #003559;
    }

    .buttons_detail a:hover {
        color: white;
        text-decoration: none;
    }

    .img_detail img {
        width: 85%;
        height: 60%;
        margin-top: 22%;
        margin-right: 10%;
    }
</style>

<style>
    .discription {
        background: #003559;
        color: #fff;
        width: 95%;
        height: 50px;
        margin-left: 5%;
        margin-top: 5%;
        align-items: center;
    }

    .discription h3 {
       text-align: left;
       padding: 15px 45px;
    }
</style>