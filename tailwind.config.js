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
                primary: {
                    DEFAULT: '#000000', // noir dominant
                    light: '#111111',
                },
                accent: {
                    DEFAULT: '#FFD700', // jaune
                    dark: '#E6C200',
                },
            },
        },
    },
    plugins: [],
}
