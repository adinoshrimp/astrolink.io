const chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

const randomChar = () => chars[Math.floor(Math.random() * (chars.length - 1))],
    randomString = length => Array.from(Array(length)).map(randomChar).join("");

const card = document.querySelector(".card"),
    letters = card.querySelector(".card-letters");

const handleOnMove = e => {
    const rect = card.getBoundingClientRect(),
            x = e.clientX - rect.left,
            y = e.clientY - rect.top;

    letters.style.setProperty("--x", `${x}px`);
    letters.style.setProperty("--y", `${y}px`);

    letters.innerText = randomString(11000);
}

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    document.querySelector('body').classList.add('mobile');
    let halfScreenHeight = screen.height / 2;
    letters.style.setProperty("--x", `50vw`);
    letters.style.setProperty("--y", `${halfScreenHeight}px`);

    letters.innerText = randomString(11000);
} else {
    card.onmousemove = e => handleOnMove(e);
    card.ontouchmove = e => handleOnMove(e.touches[0]);
}