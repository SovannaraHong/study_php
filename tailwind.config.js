/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx,html}"],
  theme: {
    extend: {
      fontFamily: {
        sansCustom: ['"IBM Plex Sans"', "sans-serif"],
        jersey: ['"Jersey 10"', "cursive"],
      },
    },
  },
  plugins: [],
};
