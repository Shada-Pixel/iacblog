const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                hindsili: ['Hind Siliguri', 'sans-serif'],
            },
            backgroundImage: {
                'sidebg': "url('/public/images/sidebg.jpg')",
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                slade: '#2C3E50',
                sblue: '#3498DB',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
