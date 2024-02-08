/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          'sobuj': '#191C24',
          'textColor': '#6C7293',
        },
        fontFamily:
        {
          josefin:["Josefin Sans"],
        },
      },
    },
    plugins: [],
  }

