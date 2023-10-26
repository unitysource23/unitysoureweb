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
          colors: {
            primary: '#00812C',
            paraColor:"#777777",
           
          },
    },
  },
  plugins: [],
}
