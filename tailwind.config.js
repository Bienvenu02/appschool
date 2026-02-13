/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class', // Active le mode sombre via une classe (ex: <html class="dark">)
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.jsx",
    "./resources/**/*.ts",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
