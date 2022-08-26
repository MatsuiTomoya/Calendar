const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px',
            
        },
         colors: {
             'blue': '#1fb6ff',
             'pink': '#ff49db',
             'orange': '#ff7849',
             'green': '#13ce66',
             'gray-dark': '#273444',
             'gray': '#8492a6',
             'gray-light': '#d3dce6',
             
         },
        extend: {
            spacing: {
                '128': '32rem',
                '144': '36rem',
                
            },
        fontFamily: {
            sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            
        },
        borderRadius: {
            '4xl': '2rem',
            
        },    
    },
},

    plugins: [require('@tailwindcss/forms')],
};
