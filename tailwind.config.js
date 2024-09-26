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
            primary: '#004678',  // Azul oscuro
            secondary: '#FEAF00', // Amarillo cálido
            lightGray: '#F4F4F4', // Gris claro
            darkGray: '#333333',  // Gris oscuro
            success: '#00A676',   // Verde suave
            error: '#D9534F',     // Rojo suave

        },
        fontFamily: {
            sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        },
        extend: {

        },
    },

    plugins: [forms],
};
