<?php
    $ispro = $_GET['m'] == "pro";

    if($ispro) {
        $pname = "Astro r1 Pro Max";
        $pimg = "r1_pro_max";
        $pprice = "449,99";
    } else {
        $pname = "Astro r1";
        $pimg = "r1";
        $pprice = "849,99";
    }
    

    $title = $pname;
?>
<style>
    .split.same .text{
        justify-content: center;
    }

    h3{

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
                        <img src="/assets/img/products/<?php echo $pimg ?>_t.png" alt="Product image of <?php echo $pname ?>" />
                        <img src="/assets/img/products/<?php echo $pimg ?>_t.png" class="shadow" />
                    </div>
                </div>
                <div class="middle text">
                    <div>
                        <?php if($ispro) { ?>
                        <h2>Astro r1</h2>
                        <h1>Pro Max</h1>
                        <?php } else { ?>
                        <h1>Astro r1</h1>
                        <?php } ?>
                        <h3 class="price"><?php echo $pprice ?>€</h3>
                        <div class="items">
                            <a href="?m=default" class="<?php  echo $ispro ? "" : "active" ?>">
                                <img src="/assets/img/products/r1_t.png" alt="Astro r1" title="Astro r1" />
                            </a>
                            <a href="?m=pro" class="<?php  echo $ispro ? "active" : "" ?>">
                                <img src="/assets/img/products/r1_pro_max_t.png" alt="Astro r1 Pro Max" title="Astro r1 Pro Max" />
                            </a>
                        </div>
                        <button>
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M2 2h4v4h16v11H4V4H2V2zm4 13h14V8H6v7zm0 4h3v3H6v-3zm14 0h-3v3h3v-3z" fill="currentColor"/> </svg>
                            <span>Buy now</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="content ptop">
                <div class="split same">
                    <div class="middle img rvimg">
                        <img src="/assets/img/products/r1/tpu.jpg" alt="Powerful TPU" />
                    </div>
                    <div class="middle">
                        <div>
                            <h2><span>Blazing Fast</span> Processing</h2>
                            <p>Thanks to the Coral Dual Edge TPU all your conversations, searches and commands are processed in no time.</p>
                        </div>
                    </div>
                    <div class="middle img rvshowimg">
                        <img src="/assets/img/products/r1/tpu.jpg" alt="Powerful TPU" />
                    </div>
                </div>
            </div>
            <div class="content ptop">
                <div class="split same">
                    <div class="middle img">
                        <img src="/assets/img/products/r1/smart-home.jpg" alt="Smart Home" />
                    </div>
                    <div class="middle">
                        <div>
                            <h2>Home has never been <span>smarter</span></h2>
                            <p>Manage all smart home devices by a powerful AI that is also able to complete complex tasks and routines.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content ptop">
                <div class="split same">
                    <div class="middle img rvimg">
                        <img src="/assets/img/products/r1/privacy.jpg" alt="Build" />
                    </div>
                    <div class="middle">
                        <div>
                            <h2>Build so you <span>own</span></h2>
                            <p>All processed data is processed locally on your device and encrypted with military grade encryption standard to prevent data breaches and making it impossable for tech giants to learn even more about you.</p>
                        </div>
                    </div>
                    <div class="middle img rvshowimg">
                        <img src="/assets/img/products/r1/privacy.jpg" alt="Build" />
                    </div>
                </div>
            </div>
            <?php if($ispro) { ?>
            <div class="content ptop">
                <div class="split same">
                    <div class="middle img">
                        <img src="/assets/img/products/r1/build.jpg" alt="Build" />
                    </div>
                    <div class="middle">
                        <div>
                            <h2>Be a builder like <span>Bob</span></h2>
                            <p>Train and fine tune your own AI models by using our simple interfaces. If you feel fancy, connect them over a local API with your projects to create a product out of a vision.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>