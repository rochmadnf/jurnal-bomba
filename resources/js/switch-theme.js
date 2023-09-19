window.addEventListener("livewire:navigated", () => {
    initMode();
});

window.addEventListener("load", () => {
    initMode();
});

window
    .matchMedia("(prefers-color-scheme: dark)")
    .addEventListener("change", ({ matches }) => {
        if (localStorage.getItem("ui-ref") === "system") {
            matches ? setMode("dark") : setMode("light");
        }
    });

const btnThemes = document.querySelectorAll("[data-btn-theme]");
btnThemes.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        const theme = e.currentTarget.getAttribute("data-btn-theme");

        if (theme !== "system") {
            localStorage.removeItem("ui-ref");
            setMode(theme);
        } else {
            localStorage.removeItem("ui-theme");
            initMode();
        }

        document.getElementById("ddThemeMode").click();
    });
});

function initMode() {
    let currentTheme = localStorage.getItem("ui-theme");
    if (currentTheme === null) {
        currentTheme = window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        localStorage.setItem("ui-ref", "system");
    }

    setMode(currentTheme);
    setBodyTexture();
}

function setIcon(theme) {
    const icons = {
        dark: ["d", "l", "s"],
        light: ["l", "d", "s"],
        system: ["s", "d", "l"],
    };

    document
        .querySelector(`.dt-icon-${icons[theme][0]}`)
        .classList.remove("hidden");
    document
        .querySelector(`.dt-icon-${icons[theme][1]}`)
        .classList.add("hidden");
    document
        .querySelector(`.dt-icon-${icons[theme][2]}`)
        .classList.add("hidden");
}

function setMode(theme) {
    const uiRef = localStorage.getItem("ui-ref");

    if (theme === "dark") {
        document.documentElement.classList.add("dark");
        localStorage.setItem("ui-theme", "dark");
    } else {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("ui-theme", "light");
    }

    if (uiRef === "system" || theme === "system") {
        setIcon("system");
    } else {
        setIcon(theme);
        localStorage.removeItem("ui-ref");
    }
}

function setBodyTexture() {
    const elTexture = document.getElementById("body-texture");
    elTexture.style.backgroundImage = `url(${location.protocol}//${location.host}/logo/constants/brand-outline-100.png)`;
}
