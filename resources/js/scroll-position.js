window.addEventListener("scroll", () => {
    initNavbar();
});

window.addEventListener("livewire:navigated", () => {
    toWindowTop();
    initNavbar();
});

window.addEventListener("load", () => {
    toWindowTop();
    initNavbar();
});

function toWindowTop() {
    window.scrollTo({ behavior: "smooth", top: 0 });
}

function initNavbar() {
    const navBar = document.querySelector(".navbar");
    const btnToTop = document.getElementById("btnToTop");

    btnToTop.addEventListener("click", () => {
        toWindowTop();
    });

    if (window.pageYOffset > 0) {
        navBar.previousElementSibling.classList.remove("hidden");
        navBar.style.position = "fixed";
        btnToTop.style.display = "flex";
    } else {
        navBar.previousElementSibling.classList.add("hidden");
        navBar.style.position = "sticky";
        btnToTop.style.display = "none";
    }
}
