const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                blue: {
                    '50': '#eef4fc',
                    '100': '#d9e7f7',
                    '200': '#b7d1f0',
                    '300': '#91b8e8',
                    '400': '#679de0',
                    '500': '#347dd5',
                    '600': '#235fa9',
                    '700': '#1d4f8c',
                    '800': '#19457b',
                    '900': '#0f2949',
                },
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
