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
                "gradient": "linear-gradient(to right, rgba(21, 32, 52, 0.95), rgba(11, 0, 41, 0.95))",
                "custom-border-b":
                    "linear-gradient(to right, rgba(15, 34, 57, 0), rgba(15, 34, 57, 1), rgba(15, 34, 57, 0))",
            },
        },
    },

    darkMode: "selector",

    plugins: [
        forms,
        require("preline/plugin"),
        function ({ addUtilities }) {
            const newUtilities = {
                ".scrollbar-thin": {
                    "scrollbar-width": "thin",
                },
                ".scrollbar-thumb-gray": {
                    "&::-webkit-scrollbar-thumb": {
                        "background-color": "#782424",
                    },
                },
                ".scrollbar-thumb-rounded": {
                    "&::-webkit-scrollbar-thumb": {
                        "border-radius": "0.375rem",
                    },
                },
                ".scrollbar-thin::-webkit-scrollbar": {
                    width: "8px",
                },
                ".scrollbar-thin::-webkit-scrollbar-track": {
                    background: "#f1f1f1",
                },
            };

            addUtilities(newUtilities, ["responsive", "hover"]);
        },
    ],
};
