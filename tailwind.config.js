import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                stratos: {
                    50: "#e4efff",
                    100: "#cfe1ff",
                    200: "#a8c5ff",
                    300: "#749eff",
                    400: "#3e63ff",
                    500: "#132bff",
                    600: "#0013ff",
                    700: "#0013ff",
                    800: "#0011e4",
                    900: "#0007b0",
                    950: "#000154",
                },
            },
        },
        screens: {
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1440px",
        },
    },
    daisyui: {
        themes: ["night"],
    },
    plugins: [require("daisyui")],
};
