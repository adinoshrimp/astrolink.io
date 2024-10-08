<?php
    function isActive($uri) {
        if($_SERVER['REQUEST_URI'] == $uri) {
            return "active";
        }
    }
?>
<header>
    <nav>
        <ul class="logolink">
            <li><a href="/" class="logo">
                <img src="/assets/img/logo.png" alt="<?php echo $_ENV['APP_NAME'] ?>">
            </a></li>
        </ul>
        <ul class="links">
            <div class="linkcenter">
                <button class="closemenu" onclick="toggleMenu()">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M5 5h2v2H5V5zm4 4H7V7h2v2zm2 2H9V9h2v2zm2 0h-2v2H9v2H7v2H5v2h2v-2h2v-2h2v-2h2v2h2v2h2v2h2v-2h-2v-2h-2v-2h-2v-2zm2-2v2h-2V9h2zm2-2v2h-2V7h2zm0 0V5h2v2h-2z" fill="currentColor"/> </svg>
                </button>
                <li><a href="/" class="<?php echo isActive("/") ?>">Home</a></li>
                <li><a href="/store" class="<?php echo isActive("/store") ?>">Store</a></li>
                <li><a href="/blog" class="<?php echo isActive("/blog") ?>">Blog</a></li>
                <li><a href="https://support.astrolink.io">Support</a></li>
                <li><a href="https://community.astrolink.io">Community</a></li>
                <li><a href="/about" class="<?php echo isActive("/about") ?>">About us</a></li>
            </div>
        </ul>
        <ul class="right">
            <li><button class="transparent" id="searchbtn" onclick="toggleSearch()">
                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6 2h8v2H6V2zM4 6V4h2v2H4zm0 8H2V6h2v8zm2 2H4v-2h2v2zm8 0v2H6v-2h8zm2-2h-2v2h2v2h2v2h2v2h2v-2h-2v-2h-2v-2h-2v-2zm0-8h2v8h-2V6zm0 0V4h-2v2h2z" fill="currentColor"/></svg>
            </button></li>
            <li><button class="transparent" id="searchbtn">
                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9 2h6v2H9V2zm6 4V4h2v2h4v16H3V6h4V4h2v2h6zm0 2H9v2H7V8H5v12h14V8h-2v2h-2V8z" fill="currentColor"/></svg>
            </button></li>
            <li><?php include 'account.php' ?></li>
            <li class="storebtn"><a href="/store" class="btn icon">
                <span>Explore</span>
                <svg class="arrow-left" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 11v2h12v2h2v-2h2v-2h-2V9h-2v2H4zm10-4h2v2h-2V7zm0 0h-2V5h2v2zm0 10h2v-2h-2v2zm0 0h-2v2h2v-2z" fill="currentColor"/></svg>
            </a></li>
            <li class="openmenu"><button onclick="toggleMenu()">
                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm16 5H4v2h16v-2z" fill="currentColor"/> </svg>
            </button></li>
        </ul>
    </nav>
</header>
<div class="popup searchbox">
    <div>
        <form action="javascript:void(0)" method="get">
            <input type="text" id="searchform" name="q" placeholder="Search..." autocomplete="off" required onkeyup="showResult(this.value)">
            <button class="transparent" type="submit">
                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M6 2h8v2H6V2zM4 6V4h2v2H4zm0 8H2V6h2v8zm2 2H4v-2h2v2zm8 0v2H6v-2h8zm2-2h-2v2h2v2h2v2h2v2h2v-2h-2v-2h-2v-2h-2v-2zm0-8h2v8h-2V6zm0 0V4h-2v2h2z" fill="currentColor"/> </svg>
            </button>
        </form>
        <div id="livesearch"></div>
    </div>
    <div class="nav">
        <div class="cont">
            <button id="clsearch" onclick="toggleSearch()">
                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 5h2v2H5V5zm4 4H7V7h2v2zm2 2H9V9h2v2zm2 0h-2v2H9v2H7v2H5v2h2v-2h2v-2h2v-2h2v2h2v2h2v2h2v-2h-2v-2h-2v-2h-2v-2zm2-2v2h-2V9h2zm2-2v2h-2V7h2zm0 0V5h2v2h-2z" fill="currentColor"/></svg>
                <span>ESC</span>
            </button>
        </div>
    </div>
</div>

<div class="aichat">
    <div class="chatform">
        <div class="chatcon">
            <div id="chathistory"></div>
            <div id="scrolldown"></div>
        </div>
        <form id="aichatform">
            <input type="text" name="message" placeholder="Ask astroAI..." autocomplete="off" required id="chatbox">
            <button type="submit">
                <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M18 16H8v2H6v-2H4v-2h2v-2h2v2h10V4h2v12h-2zM8 12v-2h2v2H8zm0 6v2h2v-2H8z" fill="currentColor"/> </svg>
            </button>
        </form>
    </div>
    <button class="chatbtn" onclick="toggleChat()">
        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="close"> <path d="M7 8H5v2h2v2h2v2h2v2h2v-2h2v-2h2v-2h2V8h-2v2h-2v2h-2v2h-2v-2H9v-2H7V8z" fill="currentColor" /> </svg>
        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="open"> <path d="M4 2h18v16H6v2H4v-2h2v-2h14V4H4v18H2V2h2zm5 7H7v2h2V9zm2 0h2v2h-2V9zm6 0h-2v2h2V9z" fill="currentColor" /> </svg>
    </button>
</div>