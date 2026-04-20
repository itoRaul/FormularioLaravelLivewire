/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php", // Essencial para arquivos Blade do Laravel
    "./resources/**/*.js",         // Para arquivos JavaScript
    "./resources/**/*.vue",        // Caso você use Vue.js
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}