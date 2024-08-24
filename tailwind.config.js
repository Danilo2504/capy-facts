/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                brown: "#b1896a",
                black: "#403d36",
                brownDark: "#745a4b",
                white: "#ffffff",
            },
            backgroundColor: {
                brown: "#b1896a",
                black: "#403d36",
                brownDark: "#745a4b",
                white: "#ffffff",
            },
        },
    },
    plugins: [],
};
