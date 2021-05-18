const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: [
                    'Roboto'],
                serif: [
                        '"Patua One"'],
            },
            textColor: {
                'azul': '#000324',
                'rosa': '#f9e1bc',
                'verde': '#007467',
            },

            backgroundImage: theme => ({
                'hero': "url('/images/imgindex.png')",
            }),

            backgroundColor: theme => ({
                ...theme('colors'),
                'one': '#000324',
                'two': '#f9e1bc',
                'three': '#007467',
            }),
            
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
