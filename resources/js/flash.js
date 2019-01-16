const flashes = document.querySelectorAll("div[data-alert]");

flashes.forEach(flash => {
    const important = flash.querySelector("[data-important]");
    const hide = () => flash.remove();

    if (important) {
        important.addEventListener("click", hide);
    } else {
        setTimeout(hide, 3000);
    }
});
