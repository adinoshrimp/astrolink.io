<?php
    $title = "Error 404";
?>
<link rel="stylesheet" href="/assets/css/matrix.css">
<style>
    :root {
        --background-rgb: 255 42 0;
        --background-light-rgb: 255 136 77;
        --hyperplexed-main-rgb: 255 195 77;
        --hyperplexed-main-light-rgb: 255 42 0;
        --hyperplexed-secondary-rgb: 255 42 0;
        --card-size: 480px;
        --font-size: 1.2rem;
    }

    svg.downicon{
        height: 100px;
    }
</style>
<div class="top middle">
    <div class="card-track">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-image">
                    <div>
                        <svg class="downicon" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M6 4h14v2h2v6h-8v2h6v2h-4v2h-2v2H2V8h2V6h2V4zm2 6h2V8H8v2z" fill="currentColor"/> </svg>
                        <h1>Error 404</h1>
                        <p>The requested URL <?php echo $_SERVER['REQUEST_URI'] ?> was not found on this server. </p>
                    </div>
                </div>
                <div class="card-gradient"></div>
                <div class="card-letters"></div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/matrix.js"></script>