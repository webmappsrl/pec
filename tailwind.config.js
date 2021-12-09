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
        'body': ['"Manrope"'],
      },
      colors: {
        'primary': '#003300',
        'secondary': '#738377',
        'primary-light': '#E3EDDA',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
