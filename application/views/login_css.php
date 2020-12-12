<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">

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

    .sing-in {
        position: relative;
        width: 100%;
        min-height: 100vh;
    }

    .sing-in:before {
        content: "";
        position: absolute;
        height: 1660px;
        width: 2000px;
        top: -10%;
        right: 48%;
        transform: translateY(-50%);
        background-image: linear-gradient(-45deg, #4481eb 0%, #04befe 100%);
        transition: 1.8s ease-in-out;
        border-radius: 50%;
        z-index: 6;
    }

    .forms-container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    form {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0rem 5rem;
        transition: all 0.2s 0.7s;
        overflow: hidden;
        grid-column: 1 / 2;
        grid-row: 1 / 2;
    }

    form.sign-in-form {
        z-index: 2;
    }


    .title {
        font-size: 2.2rem;
        color: #444;
        margin-bottom: 10px;
    }

    .input-field {
        max-width: 380px;
        width: 100%;
        background-color: #f0f0f0;
        margin: 10px 0;
        height: 45px;
        border-radius: 55px;
        display: grid;
        grid-template-columns: 15% 85%;
        padding: 0 0.4rem;
        position: relative;
    }

    .input-field i {
        text-align: center;
        line-height: 45px;
        color: #acacac;
        transition: 0.5s;
        font-size: 16px;
        font-size: 1.1rem;
    }

    .input-field input {
        background: none;
        outline: none;
        border: none;
        line-height: 1;
        font-size: 1.1rem;
        color: #333;
    }

    .input-field input::placeholder {
        color: #aaa;
        font-weight: 500;
    }

    .btn {
        width: 150px;
        background-color: #5995fd;
        border: none;
        outline: none;
        height: 49px;
        border-radius: 49px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        margin: 10px 0;
        cursor: pointer;
        transition: 0.5s;
    }

    .btn:hover {
        background-color: #4d84e2;
    }

    .signin {
        position: absolute;
        top: 40%;
        transform: translate(-50%, -50%);
        left: 80%;
        width: 50%;
        display: grid;
        grid-template-columns: 1fr;
        z-index: 1;
    }

    .panels_container {
        position: relative;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .image2 {
        width: 100%;
        margin-right:10%;
    }

    .panel {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: space-around;
        text-align: center;
        z-index: 7;
    }

    .left-panel {
        padding: 3rem 17% 2rem 12%;

    }

    .panel .content-panel {
        color: #fff;
        width: 100%;
        margin-right: 33%;

    }

    .panel h3 {
        font-weight: 600;
        line-height: 1;
        font-size: 2rem;
    }

    .panel p {
        font-size: 0.95rem;
        padding: 0.7rem 0;
        width: 100%;
    }

    .btn.transparent {
        margin: 0;
        background: none;
        border: 2px solid #fff;
        width: 130px;
        height: 41px;
        font-weight: 600;
        font-size: 0.8rem;
    }
</style>