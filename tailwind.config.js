/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
      ],
  theme: {
    extend: {
        animation: {
            rubberBand: 'rubberBand 2s infinite',
        },
        keyframes: {
            rubberBand: {
                from: {
                  transform: 'scale3d(1, 1, 1)',
                },

                '30%': {
                  transform: 'scale3d(1.25, 0.75, 1)',
                },

                '40%': {
                  transform: 'scale3d(0.75, 1.25, 1)',
                },

                '50%': {
                  transform: 'scale3d(1.15, 0.85, 1)',
                },

                '65%': {
                  transform: 'scale3d(0.95, 1.05, 1)',
                },

                '75%': {
                  transform: 'scale3d(1.05, 0.95, 1)',
                },
                to: {
                  transform: 'scale3d(1, 1, 1)',
                },
              },
        },
        colors: {
            primary: {"50":"#c5b1ff","100":"#c5b1ff","200":"#a98aff","300":"#8c63ff","400":"#6f3cff","500":"#5214ff","600":"#3e00ec","700":"#3400c5","800":"#2a009e","900":"#1f0077"}
          },
          backgroundImage: {
            'hero-pattern': "linear-gradient(to right bottom, rgba('#7ed56f',0.8), rgba('#28b485',0.8)), url('../src/images/icon-bg.jpg')",
         },
      },
      fontFamily: {
        'body': [
      'Open Sans',
      'ui-sans-serif',
      'system-ui',
      '-apple-system',
      'system-ui',
      'Segoe UI',
      'Roboto',
      'Helvetica Neue',
      'Arial',
      'Noto Sans',
      'sans-serif',
      'Apple Color Emoji',
      'Segoe UI Emoji',
      'Segoe UI Symbol',
      'Noto Color Emoji'
    ],
        'sans': [
            'Open Sans',
            'ui-sans-serif',
            'system-ui',
            '-apple-system',
            'system-ui',
            'Segoe UI',
            'Roboto',
            'Helvetica Neue',
            'Arial',
            'Noto Sans',
            'sans-serif',
            'Apple Color Emoji',
            'Segoe UI Emoji',
            'Segoe UI Symbol',
            'Noto Color Emoji',
            'Gotham'
        ]
      }
  },
  plugins: [
    require('flowbite/plugin'),
    require("daisyui")
    ],
    daisyui: {
        styled: true,
        themes: true,
        base: true,
        utils: true,
        logs: true,
        rtl: false,
        prefix: "",
        darkTheme: "dark",
      },
}
