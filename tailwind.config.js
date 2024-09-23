import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        colors: {
            'denexos-blue': ' #004678',
            'denexos-yellow': '#FEAF00'
        },
        fontFamily: {
            sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        },
        extend: {

        },
    },

    plugins: [forms],
};
