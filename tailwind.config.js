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
            // fontFamily: {
            //     poppins: ["Poppins"],
            // },
        },
    },
    plugins: [require("daisyui")],
};

// module.exports = {
//     plugins: [require("taos/plugin")],
//     safelist: [
//         "!duration-[0ms]",
//         "!delay-[0ms]",
//         'html.js :where([class*="taos:"]:not(.taos-init))',
//     ],
//     content: {
//         relative: true,
//         transform: (content) => content.replace(/taos:/g, ""),
//         files: ["./src/*.{html,js}"],
//     },
// };
