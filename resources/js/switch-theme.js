window.addEventListener("livewire:navigated", () => {
    let currentTheme = localStorage.getItem("ui-theme");

    if (currentTheme === null) {
        localStorage.setItem("ui-theme", "dark");
        currentTheme = "dark";
    }

    setMode(currentTheme);
});

const btnThemes = document.querySelectorAll("[data-btn-theme]");
btnThemes.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        const theme = e.currentTarget.getAttribute("data-btn-theme");
        setMode(theme);
        document.getElementById("ddThemeMode").click();
    });
});

function setMode(theme) {
    if (theme === "dark") {
        document.documentElement.classList.add("dark");
        localStorage.setItem("ui-theme", "dark");
        document.querySelector(".dt-icon-d").classList.remove("hidden");
        document.querySelector(".dt-icon-l").classList.add("hidden");
    } else {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("ui-theme", "light");
        document.querySelector(".dt-icon-d").classList.add("hidden");
        document.querySelector(".dt-icon-l").classList.remove("hidden");
    }
}
