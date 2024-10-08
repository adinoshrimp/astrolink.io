<?php
    $title = "Sign in";
?>
<link rel="stylesheet" href="/assets/css/matrix.css">
<style>
    :root {
        --background-rgb: 51 255 187;
        --background-light-rgb: 51 255 187;
        --hyperplexed-main-rgb: 102 255 153;
        --hyperplexed-main-light-rgb: 51 255 85;
        --hyperplexed-secondary-rgb: 38 230 0;
        --card-size: 480px;
        --font-size: 1.2rem;
    }

    .cardd {
        width: 300px;
        margin: 0 auto;
        padding: 30px;
        border-radius: 20px;
        background-color: var(--bgt);
        backdrop-filter: blur(10px);
        border: 2px solid var(--colour);
    }

    .cardd h2{
        font-size: 35px;
        margin-bottom: 30px;
    }

    label {
        position: relative;
        margin-bottom: 20px;
        text-align: left;
        display: flex;
    }

    label span {
        position: absolute;
        left: 10px;
        top: 10px;
        font-size: 20px;
        pointer-events: none;
        transition: .2s;
        opacity: .6;
    }

    label input {
        width: 100%;
    }

    label input.text ~ span{
        transform: scale(.8);
        top: -15px;
        left: 0;
        opacity: 1;
    }

    .cardd p{
        margin-top: 10px;
        display: inline-flex;
    }

    .cardd p a{
        padding: 5px;
        margin: 5px;
        text-decoration: none;
    }
</style>
<div class="top middle">
<div class="card-track">
        <div class="card-wrapper">
            <div class="card">
                <div class="card-image">
                    <form method="post" class="cardd">
                        <h2>Sign in</h2>
                        <label>
                            <input type="email" name="mail" required autocomplete="off" class="textdemo" />
                            <span class="placeholder">Email</span>
                        </label>
                        <label>
                            <input type="password" name="password" required autocomplete="off" />
                            <span>Password</span>
                        </label>
                        <button type="submit">
                            <span>Sign in</span>
                            <svg class="arrow-left" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 11v2h12v2h2v-2h2v-2h-2V9h-2v2H4zm10-4h2v2h-2V7zm0 0h-2V5h2v2zm0 10h2v-2h-2v2zm0 0h-2v2h2v-2z" fill="currentColor"/></svg>
                        </button>
                        <p>
                            <a href="/password">Forgot password?</a>
                            <a href="/password">Register</a>
                        </p>
                    </form>
                </div>
                <div class="card-gradient"></div>
                <div class="card-letters"></div>
            </div>
        </div>
    </div>
</div>
<script>
    inputsActive = document.querySelectorAll("input[type='text'], textarea, input[type='email'], input[type='password']");

    function checkInputs() {

    inputsActive.forEach(function(input) {
            if (input.value.trim() !== "") {
                input.classList.add("has-content");
            } else {
                input.classList.remove("has-content");
            }
        });
    }

    window.addEventListener("load", checkInputs);
    inputsActive.forEach(function(input) {
    input.addEventListener("input", function() {
            if (this.value.trim() !== "") {
                this.classList.add("text");
            } else {
                this.classList.remove("text");
            }
        });
    });
</script>
<script src="/assets/js/matrix.js"></script>