const colors = require("tailwindcss/colors");

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
                cyan: colors.cyan,
                teal: colors.teal,
            },
        },
    },
    plugins: [require("daisyui")],
};

// module.exports = {
//     //...
//     plugins: [require("daisyui")],
// };
