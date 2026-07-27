/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#FF1493",
                secondary: "#FFB6C1",
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
    ],
}
