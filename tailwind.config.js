const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue'
  ],
  darkMode: false,
  theme: {},
  variants: {},
  plugins: [
      require('@tailwindcss/forms'),
      require('@tailwindcss/line-clamp')
  ],
}
