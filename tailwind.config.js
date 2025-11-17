/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class', // <-- TAMBAHKAN BARIS INI
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}