const colors = require('tailwindcss/colors')

module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'light-blue': colors.lightBlue,
            cyan: colors.cyan,
        },
    },
  },
  plugins: [],
}
