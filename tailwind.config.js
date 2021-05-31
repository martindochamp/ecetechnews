const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      sans: ['Inter', ...defaultTheme.fontFamily.sans],
      serif: ['Newreader', ...defaultTheme.fontFamily.serif],
      title: ['Newsreader', 'serif'],
    },
    extend: {
      backgroundImage: theme => ({
       'hero-musk': "url('/storage/elonmusk.jpg')",
       'hero-aturing': "url('/storage/turing.JPG')",
       'hero-sleep': "url('/storage/techsleep.jpg')",
       'hero-flamanville': "url('/storage/flamanville.jpg')",
       'hero-spacex': "url('/storage/spacex.jpg')",
       'hero-telescope': "url('/storage/telescope.jpg')",
       'hero-graphiccard': "url('/storage/graphiccard.jpg')",
       'hero-tokamak': "url('/storage/tokamak.png')",
       'hero-bernard': "url('/storage/bernardbigot.jpg')",
       'hero-amd': "url('/storage/amd.jpg')",
       'hero-nano': "url('/storage/nano.JPG')",
       'hero-micro': "url('/storage/micro.jpg')",
       'hero-psb': "url('/storage/psb.jpg')",
       'hero-martin': "url('/storage/martin.jpg')",
       'hero-hamza': "url('/storage/hamza.jpg')",
       'hero-donatien': "url('/storage/donatien.jpg')",
       'hero-user': "url('/storage/user.png')",
       'hero-ai': "url('/storage/ai.jpg')",
       'hero-crew': "url('/storage/crew.jpg')",
      }),
      backgroundSize: theme => ({
        'zoom' : '120%',
      }),
    }
  },
  variants: {
    extend: {},
    display: ['responsive', 'group-hover', 'group-focus'],
  },
  plugins: [],
}
