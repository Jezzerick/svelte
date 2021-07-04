module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      // colors: {
      //   primary: '#8739F9',
      //   secondary: '#C651CD',
      //   gray: '#363636',
      //   darkPrimary: '#100F10',
      //   darkSecondary: '#1B1B1B',
      //   darkLighter: '#242424',
      //   navPrimary: '#4d4d55',
      // },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
