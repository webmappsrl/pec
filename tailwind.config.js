module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.html',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'manrope': ['Manrope', 'sans-serif'],
      },
      colors: {
        'primary': '#003300',
        'secondary': '#738377',
        'primary-light': '#E3EDDA',
        'light-grey': '#F2F2F2',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
