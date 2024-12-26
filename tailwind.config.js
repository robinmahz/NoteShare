import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Dosis", "sans-serif"],
            },
            colors: {
                primary: "#6C983E",
                "primary-dark": "#6C8A4C",
                "primary-light": "#D4E6C2",
                "primary-el": "#DCFCE6",
                accent: "#2463EB",
                "accent-dark": "#2463EB",
                "accent-light": "#DBE9FE",
            },
        },
    },

    plugins: [forms],
};
