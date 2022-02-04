module.exports = {
  purge: [
    './app/**/*.php',
    './resources/**/*.php'
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
        'primary-dark': '#CCDFBD',
        'primary-border': '#72A747',
        'light-grey': '#F2F2F2'
      },
      zIndex: {
        '1000': '1000',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
