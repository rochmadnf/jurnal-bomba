const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
                bungee: ["Bungee", ...defaultTheme.fontFamily.serif],
                spectral: ["Spectral", ...defaultTheme.fontFamily.serif],
                "source-sans": [
                    "'Source Sans 3'",
                    ...defaultTheme.fontFamily.sans,
                ],
            },
            colors: {
                // use when light mode
                accent: {
                    1: colors.white, // bg
                    2: colors.slate[50],
                },
                // use when dark mode
                "dark-accent": {
                    1: colors.amber[600], // component bg
                },
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
