<?php
    $title = "Store";

    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    $isMac = strpos($userAgent, 'macintosh')!== false;
    $isiOS = strpos($userAgent, 'iphone')!== false || strpos($userAgent, 'ipad')!== false;

    if ($isiOS || $isMac) {
        $appdesc = "App Store";
        $appurl = "https://de.nothing.tech/pages/phone-2";
    } else {
        $appdesc = "Play Store";
        $appurl = "https://play.google.com/store/apps/details?id=com.gameloft.android.ANMP.GloftPOHM";
    }
?>
<style>
    .mySwiper{
        --swiper-theme-color: #fff;
    }

    .swiper-button-next, .swiper-button-prev{
        display: none !important;
    }

    swiper-container button{
        margin: 5px;
    }

    swiper-container button svg{
        margin-right: 5px;
    }

    swiper-container .btn.second{
        background-color: transparent;
        color: var(--colour);
    }

    swiper-container {
        width: calc(100% - 4px);
        height: auto;
        border-radius: 30px;
        overflow: hidden;
        background: #10141a;
    }

    swiper-slide {
        text-align: center;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    swiper-slide .btns{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    swiper-slide h2{
        letter-spacing: -1px;
    }

    swiper-slide .img, swiper-slide .desc {
        position: relative;
        width: 40%;
        margin: 30px 60px;
    }

    swiper-slide .img{
        width: 60%;
    }

    swiper-slide .img img{
        left: 70px;
        width: 100%;
    }

    swiper-slide .img img.shadow {
        position: absolute;
        top: 0;
        left: 0;
        filter: blur(50px);
        z-index: -1;
    }

    .swiper svg{
        color: #fff !important;
    }

    .centered .content {
        width: 1300px;
        max-width: calc(100vw - 40px);
    }

    @media only screen and (max-width: 1120px) {
        swiper-slide {
            display: block;
        }

        swiper-slide .img, swiper-slide .desc {
            width: auto;
        }
    }

    @media only screen and (max-width: 450px) {
        swiper-slide .btns{
            display: block;
        }

        swiper-slide .img, swiper-slide .desc {
        position: relative;
        width: calc(100% - 40px);
        margin: 20px;
    }
    }
</style>
<main>
<div class="centered ptop">
    <div>
        <h1>Store</h1>
        <div class="content">
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30" centered-slides="true" autoplay-delay="5000" autoplay-disable-on-interaction="false" loop="true">
                <swiper-slide>
                    <div class="img">
                        <img src="/assets/img/products/r1_pro_max_t.png">
                        <img src="/assets/img/products/r1_pro_max_t.png" class="shadow">
                    </div>
                    <div class="desc">
                        <h2>Astro r1 Pro Max</h2>
                        <div class="btns">
                            <a href="/products/r1?m=pro" class="btn second">More</a>
                            <button>
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M2 2h4v4h16v11H4V4H2V2zm4 13h14V8H6v7zm0 4h3v3H6v-3zm14 0h-3v3h3v-3z" fill="currentColor"/> </svg>
                                <span>Buy now</span>
                            </button>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img">
                        <img src="/assets/img/products/r1_t.png">
                        <img src="/assets/img/products/r1_t.png" class="shadow">
                    </div>
                    <div class="desc">
                        <h2>Astro r1</h2>
                        <div class="btns">
                            <a href="/products/r1?m=default" class="btn second">More</a>
                            <button>
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M2 2h4v4h16v11H4V4H2V2zm4 13h14V8H6v7zm0 4h3v3H6v-3zm14 0h-3v3h3v-3z" fill="currentColor"/> </svg>
                                <span>Buy now</span>
                            </button>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="img">
                        <img src="/assets/img/products/login-nothing.png">
                        <img src="/assets/img/products/login-nothing.png" class="shadow">
                    </div>
                    <div class="desc">
                        <h2>Astro R App</h2>
                        <div class="btns">
                            <a href="/products/r-app" class="btn second">More</a>
                            <a href="<?php echo $appurl ?>" class="btn" target="_blank">
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M10 20H8V4h2v2h2v3h2v2h2v2h-2v2h-2v3h-2v2z" fill="currentColor"/> </svg>
                                <span><?php echo $appdesc ?></span>
                            </a>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>
    </div>
</main>
<script src="/assets/js/swiper.js"></script>