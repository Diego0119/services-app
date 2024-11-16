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
        extend: {
            colors: {
                primary: '#8B5CF6',  // Púrpura vibrante
                secondary: '#34D399', // Verde menta
                lightGray: '#F5F5F5', // Blanco humo
                darkGray: '#1F2937',  // Gris oscuro carbón
                success: '#16A34A',   // Verde bosque
                error: '#DC2626',     // Rojo granate
                accent: '#F97316',    // Naranja intenso
            },
        },
    },

    plugins: [forms],
};
