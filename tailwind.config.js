import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                wiggle: {
                  '0%, 100%': { transform: 'rotate(0deg)' },
                  '50%': { transform: 'rotate(180deg)' },
                },
                appear: {
                    '0%' : { opacity:'0' },
                    '50%': { opacity:'0.5' },
                    '100%': {opacity:'1'}
                }
            },
            animation: {
                wiggle: 'wiggle 1s ease-in-out 1',
                appear: 'appear 2s ease-in-out 1',
            },
        },
    },

    plugins: [forms, typography],
};
