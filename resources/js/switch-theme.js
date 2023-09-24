window.addEventListener("livewire:navigated", () => {
    initMode();
});

window.addEventListener("load", () => {
    initMode();
});

window
    .matchMedia("(prefers-color-scheme: dark)")
    .addEventListener("change", ({ matches }) => {
        matches ? setMode("dark", true) : setMode("light", true);
    });

const btnThemes = document.querySelectorAll("[data-btn-theme]");
btnThemes.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        const theme = e.currentTarget.getAttribute("data-btn-theme");

        setMode(theme, theme === "system" ? true : false);

        document.getElementById("ddThemeMode").click();
    });
});

function getSystemPreferences() {
    return window.matchMedia("(prefers-color-scheme: dark)").matches
        ? "dark"
        : "light";
}

function initMode() {
    let currentTheme = localStorage.getItem("ui-theme");
    let system = false;

    if (currentTheme === null) {
        currentTheme = getSystemPreferences();
        system = true;
    }

    setMode(currentTheme, system);
    setBodyTexture();
}

function setIcon(theme) {
    const icons = {
        dark: ["d", "l"],
        light: ["l", "d"],
    };

    document
        .querySelector(`.dt-icon-${icons[theme][0]}`)
        .classList.remove("hidden");
    document
        .querySelector(`.dt-icon-${icons[theme][1]}`)
        .classList.add("hidden");
}

function setMode(theme, system = false) {
    theme = theme === "system" ? getSystemPreferences() : theme;

    // remove all active class from btn theme
    Array.from(document.querySelectorAll("[data-btn-theme]")).forEach((x) =>
        x.classList.remove("active"),
    );

    if (theme === "dark") {
        document.documentElement.classList.add("dark");
    } else {
        document.documentElement.classList.remove("dark");
    }

    if (system) {
        document
            .querySelector(`[data-btn-theme="system"`)
            .classList.add("active");
        localStorage.removeItem("ui-theme");
    } else {
        document
            .querySelector(`[data-btn-theme="${theme}"`)
            .classList.add("active");
        localStorage.setItem("ui-theme", theme);
    }

    setIcon(theme);
}

function setBodyTexture() {
    const elTexture = document.getElementById("body-texture");
    elTexture.style.backgroundImage = `url(${location.protocol}//${location.host}/storage/logo/constants/brand-outline-100.png)`;
}
