window.addEventListener("scroll", () => {
    initNavbar();
});

window.addEventListener("livewire:navigated", () => {
    initNavbar();
});

window.addEventListener("load", () => {
    initNavbar();
});

function initNavbar() {
    const navBar = document.querySelector(".navbar");
    if (window.pageYOffset > 0) {
        navBar.previousElementSibling.classList.remove("hidden");
        navBar.style.position = "fixed";
    } else {
        navBar.previousElementSibling.classList.add("hidden");
        navBar.style.position = "sticky";
    }
}
