/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            jakarta:'Plus Jakarta Sans',

          },
          listStyleType: {
            'custom-disc': 'disc',

          },

          colors: {
            primary: '#128100',
            paraColor:"#777777",

          },
    },
  },
  plugins: [

  ],
}

