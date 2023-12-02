/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundColor: {
                "custom-color": "#5D9F68",
                "custom-color2": "#5D9F68",
            },
            height: {
                128: "32rem",
            },
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
            },

            width: {
                477: "477px",
            },
        },
    },
    plugins: [],
};
