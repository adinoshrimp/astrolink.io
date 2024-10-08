const body = document.querySelector("body");

// links ids

var links = document.getElementsByTagName("a");

Array.prototype.forEach.call(links, function(elem, index) {
    var elemAttr = elem.getAttribute("href");
    if(elemAttr && elemAttr.includes("#")) {
    elem.addEventListener("click", function(ev) {
        ev.preventDefault();
        document.getElementById(elemAttr.replace(/#/g, "")).scrollIntoView({
            behavior: "smooth",
            block: "start",
            inline: "nearest"
            });
        });
    }
});

//navbar
window.onscroll = ()=>{
this.scrollY > 20 ? body.classList.add("sticky") : body.classList.remove("sticky");
};

// menu
function toggleMenu() {
    body.classList.toggle("menu");
}

// search
function toggleSearch() {
    body.classList.toggle("search");
    setTimeout(function() {
        if (body.classList.contains("search")) {
            document.getElementById("searchform").select();
        }
    }, 200);
}

function showResult(str) {
    if (str.length==0) {
        document.getElementById("livesearch").innerHTML="";
        document.getElementById("livesearch").style.border="0px";
        return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET","/api/livesearch?q="+str,true);
    xmlhttp.send();
}


// ai chat

firstOpened = false;

function toggleChat() {
    body.classList.toggle("chat");
    if (!firstOpened) {
        firstOpened = true;
        askAi("say hello and introduce yourself");
    }
    setTimeout(function() {
        if (body.classList.contains("chat")) {
            document.getElementById("chatbox").select();
        }
    }, 200);
}


// chat feature

form = document.getElementById("aichatform");
chathistory = document.getElementById("chathistory");
chatbox = document.getElementById("chatbox");

form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    message = chatbox.value;

    chatbox.value = "";

    createMsg('me', message);
    askAi(message);
});


async function askAi(question) {
    chathistory.innerHTML += '<div class="ai" id="loadingChat"><div class="chatbbl"><span class="loading"></span></div></div>';
    chatBottom()
    try {
        const response = await fetch('/api/llm?q=' + question)
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const data = await response.text();
        document.getElementById("loadingChat").remove();
        createMsg('ai', data);
        return;
    } catch (error) {
        console.error('There was a problem with the server response: ', error);
    }
}

function createMsg(type, content) {
    chathistory.innerHTML += '<div class="' + type + '"><div class="chatbbl">' + content + '</div></div>';
    chatBottom();
}

function chatBottom() {
    document.querySelector('#scrolldown').scrollIntoView();
}




document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        body.classList.remove("search");
        body.classList.remove("chat");
        body.classList.remove("menu");
    }
});