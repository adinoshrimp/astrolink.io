<?php
    $title = "Home";
?>
<style>
    .middle{
        height: 100vh;
    }

    .middle p{
        transform: translateY(-1vh);
    }

    @media only screen and (max-width: 1120px) {
        .middle h3{
            transform: translateY(-0.5vh);
        }
    }

    @media only screen and (max-width: 600px) {
        h1 {
            font-size: max(4em, min(13.3333vw + 2rem, 4em));
            letter-spacing: -4px;
        }
    }
</style>
<link rel="stylesheet" href="/assets/css/matrix.css">
<div class="top middle">
    <div class="card-track">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-image">
                    <div>
                        <h1><?php echo $_ENV['APP_NAME'] ?></h1>
                        <p>Your space. Your privacy.</p>
                    </div>
                </div>
                <div class="card-gradient"></div>
                <div class="card-letters"></div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/matrix.js"></script>