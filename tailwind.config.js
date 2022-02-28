const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Space Grotesk", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
