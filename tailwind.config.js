import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            screens: {
                "400px": "400px",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "color-blue": "rgb(15, 34, 57)",
                "color-grey": "#181835",
                dark: "#252525",
            },
            backgroundImage: {
                "gradient": "linear-gradient(to right, #152034, #0B0029);",
                "custom-border-b":
                    "linear-gradient(to right, rgba(15, 34, 57, 0), rgba(15, 34, 57, 1), rgba(15, 34, 57, 0))",
            },
        },
    },

    darkMode: "selector",

    plugins: [forms],
};
