import defaultTheme from "tailwindcss/defaultTheme";
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
