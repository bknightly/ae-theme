module.exports = {
  content: ['./**/*.{html,php}'],
  theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        md: '1.5rem'
      },
    },
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1500px',
      '3xl': '1800px'
    },
    extend: {
      fontFamily: {
        lato: ['"Lato"','sans-serif']
      },
      colors: {
        'color-primary': '#0073bb',
        'color-primary-dark': '#046596',
        'color-secondary': '#90c73e',
        'color-secondary-dark': '#76a81e',
      },
      fontSize: {
        xs: ['0.75rem'],
        sm: ['0.875rem'],
        base: ['1rem'],
        lg: ['1.125rem'],
        xl: ['1.25rem'],
        '2xl': ['1.5rem'],
        '3xl': ['1.875rem'],
        '4xl': ['2.25rem'],
        '5xl': ['3rem'],
        '6xl': ['3.75rem'],
        '7xl': ['4.5rem'],
        '8xl': ['6rem'],
        '9xl': ['8rem'],
      },
      backgroundSize: {
        'size-200': '200% 200%',
      },
      backgroundPosition: {
          'pos-0': '0% 0%',
          'pos-100': '100% 100%',
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms")
  ],
}
