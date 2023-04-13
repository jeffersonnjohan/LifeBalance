/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {},
    colors: {
        'cRed': '#FF5768',
        'cBlue': '#428FDE',
        'cOrange': '#FF7F62',
        'cGreen': '#3EBC85',
        'cLightGrey': '#F4F4F4',
        'cDarkGrey': '#7E7E7E',
        'cDarkBlue': '#1F244A',
        'cYellow': '#FCFF62'
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

