<?php
    $title = "Astro R App";

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
    .split.same .text{
        justify-content: center;
    }

    .split .items img{
        height: 70px;
        width: auto;
    }

    .split .items a{
        text-decoration: none;
    }

    .split .items a.active{
        opacity: .5;
        pointer-events: none;
    }

    .split .items img:hover{
        transform: scale(1.1);
    }

    .split .items a:before {
        background: none;
    }

    .split .buy{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .split button svg{
        padding-right: 5px;
    }

    .split p{
        padding: 0 20px;
    }

    @media only screen and (max-width: 700px) {
        .split.same .text {
            margin-left: 0;
        }
    }

    h2 span{
        background: -webkit-linear-gradient(170deg, var(--accent), var(--accenta));
        background-size: cover;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
<div class="centered ptop">
    <div>
        <div class="content">
            <div class="split same">
                <div class="middle img">
                    <div class="imgsh">
                        <img src="/assets/img/products/astro_r.png" alt="App" />
                        <img src="/assets/img/products/astro_r.png" class="shadow" />
                    </div>
                </div>
                <div class="middle text">
                    <div>
                        <h1>Astro R App</h1>
                        <a href="<?php echo $appurl ?>" class="btn" target="_blank">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M10 20H8V4h2v2h2v3h2v2h2v2h-2v2h-2v3h-2v2z" fill="currentColor"/> </svg>
                            <span><?php echo $appdesc ?></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content ptop">
                <div class="split same">
                <div class="middle img rvimg">
                        <img src="/assets/img/products/r-app/login.png" alt="Astro R App Login" />
                    </div>
                    <div class="middle">
                        <div>
                            <h2>Stay <span>connected</span> to all your devices</h2>
                            <p>Link all your astroLink products in seconds, make them work together and create your own small universe.</p>
                        </div>
                    </div>
                    <div class="middle img rvshowimg">
                        <img src="/assets/img/products/r-app/login.png" alt="Astro R App Login" />
                    </div>
                </div>
            </div>
            <div class="content ptop">
                <div class="split same rv">
                    <div class="middle img">
                        <img src="/assets/img/products/r-app/overview.png" alt="Astro R App Overview" />
                    </div>
                    <div class="middle">
                        <div>
                            <h2>Your <span>private</span> everywhere owned by you</h2>
                            <p>Access your AI assistant everywhere always in your pocket. Start conversations, jump into already started once or manage your devices no matter where you are.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content ptop">
                <div class="split same">
                    <div class="middle img rvimg">
                        <img src="/assets/img/products/r-app/voice.png" alt="Astro R App Voice" />
                    </div>
                    <div class="middle">
                        <div>
                            <h2>Just start <span>speaking</span></h2>
                            <p>Thanks to OpenAIs Voice detection model Whisper you can comunicate with your AI-models over voice just like talking to a real person.</p>
                        </div>
                    </div>
                    <div class="middle img rvshowimg">
                        <img src="/assets/img/products/r-app/voice.png" alt="Astro R App Voice" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>