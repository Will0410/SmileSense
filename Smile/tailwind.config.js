/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
    },
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'neutral': {
        100: '#ffffff' ,
        200: '#f7fafa' ,
        300: '#dfe8e8' ,
        400: '#929494' ,
        500: '#414242' ,
        600: '#141414' ,
      },
      'blueSS': {
        100: '#5ce1e6' ,
        200: '#188bc9' ,
        300: '#146c9c' ,
        400: '#0b415e' ,
        500: '#051f2e' ,
        600: '#03111a' ,
      }
    },
    extend: {
      fontFamily: {
        Kenit: ['Kenit', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ]
}