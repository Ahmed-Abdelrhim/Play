<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Cairo', 'Nunito', sans-serif;
    }

    .scroller {
        background-color: #0075ff;
        position: fixed;
        top: 0;
        left: 0;
        width: 0;
        height: 5px;
    }

    @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700');
    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }


    body {
        font-family: 'Roboto', sans-serif;
    }

    a {
        text-decoration: none;
    }

    .product-card {
        width: 380px;
        position: relative;
        box-shadow: 0 2px 7px #dfdfdf;
        margin: 50px auto;
        background: #fafafa;
    }

    .badge {
        position: absolute;
        left: 0;
        top: 20px;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: 700;
        background: red;
        color: #fff;
        padding: 3px 10px;
    }

    .product-tumb {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 300px;
        padding: 50px;
        background: #f0f0f0;
    }

    .product-tumb img {
        max-width: 100%;
        max-height: 100%;
    }

    .product-details {
        padding: 30px;
    }

    .product-catagory {
        display: block;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        color: #ccc;
        margin-bottom: 18px;
    }

    .product-details h4 a {
        font-weight: 500;
        display: block;
        margin-bottom: 18px;
        text-transform: uppercase;
        color: #363636;
        text-decoration: none;
        transition: 0.3s;
    }

    .product-details h4 a:hover {
        color: #fbb72c;
    }

    .product-details p {
        font-size: 15px;
        line-height: 22px;
        margin-bottom: 18px;
        color: #999;
    }

    .product-bottom-details {
        overflow: hidden;
        border-top: 1px solid #eee;
        padding-top: 20px;
    }

    .product-bottom-details div {
        float: left;
        width: 50%;
    }

    .product-price {
        font-size: 18px;
        color: #fbb72c;
        font-weight: 600;
    }

    .product-price small {
        font-size: 80%;
        font-weight: 400;
        text-decoration: line-through;
        display: inline-block;
        margin-right: 5px;
    }

    .product-links {
        text-align: right;
    }

    .product-links a {
        display: inline-block;
        margin-left: 5px;
        color: #e1e1e1;
        transition: 0.3s;
        font-size: 17px;
    }

    .product-links a:hover {
        color: #fbb72c;
    }


    /*  Footer  */
    ul {
        margin: 0px;
        padding: 0px;
    }
    .footer-section {
        background: #151414;
        position: relative;
    }
    .footer-cta {
        border-bottom: 1px solid #373636;
    }
    .single-cta i {
        color: #ff5e14;
        font-size: 30px;
        float: left;
        margin-top: 8px;
    }
    .cta-text {
        padding-left: 15px;
        display: inline-block;
    }
    .cta-text h4 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 2px;
    }
    .cta-text span {
        color: #757575;
        font-size: 15px;
    }
    .footer-content {
        position: relative;
        z-index: 2;
    }
    .footer-pattern img {
        position: absolute;
        top: 0;
        left: 0;
        height: 330px;
        background-size: cover;
        background-position: 100% 100%;
    }
    .footer-logo {
        margin-bottom: 30px;
    }
    .footer-logo img {
        max-width: 200px;
    }
    .footer-text p {
        margin-bottom: 14px;
        font-size: 14px;
        color: #7e7e7e;
        line-height: 28px;
    }
    .footer-social-icon span {
        color: #fff;
        display: block;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
    }
    .footer-social-icon a {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;
    }
    .footer-social-icon i {
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
    }
    .facebook-bg{
        background: #3B5998;
    }
    .twitter-bg{
        background: #55ACEE;
    }
    .google-bg{
        background: #DD4B39;
    }
    .footer-widget-heading h3 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 40px;
        position: relative;
    }
    .footer-widget-heading h3::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -15px;
        height: 2px;
        width: 50px;
        background: #ff5e14;
    }
    .footer-widget ul li {
        display: inline-block;
        float: left;
        width: 50%;
        margin-bottom: 12px;
    }
    .footer-widget ul li a:hover{
        color: #ff5e14;
    }
    .footer-widget ul li a {
        color: #878787;
        text-transform: capitalize;
    }
    .subscribe-form {
        position: relative;
        overflow: hidden;
    }
    .subscribe-form input {
        width: 100%;
        padding: 14px 28px;
        background: #2E2E2E;
        border: 1px solid #2E2E2E;
        color: #fff;
    }
    .subscribe-form button {
        position: absolute;
        right: 0;
        background: #ff5e14;
        padding: 13px 20px;
        border: 1px solid #ff5e14;
        top: 0;
    }
    .subscribe-form button i {
        color: #fff;
        font-size: 22px;
        transform: rotate(-6deg);
    }
    .copyright-area{
        background: #202020;
        padding: 25px 0;
    }
    .copyright-text p {
        margin: 0;
        font-size: 14px;
        color: #878787;
    }
    .copyright-text p a{
        color: #ff5e14;
    }
    .footer-menu li {
        display: inline-block;
        margin-left: 20px;
    }
    .footer-menu li:hover a{
        color: #ff5e14;
    }
    .footer-menu li a {
        font-size: 14px;
        color: #878787;
    }


</style>
