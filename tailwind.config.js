/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.php",
  ],
  darkMode: 'class', // Enable class-based dark mode
  theme: {
    extend: {
             colors: {
         // Custom color palette for medical clinic
         'light-purple': '#D6C7F7', // Primary accent color
         'blue': '#3B82F6', // CTA buttons and links
         'silver': '#C0C0C0', // Borders and backgrounds
         'black': '#000000', // Text and headings
         // Dark mode variants
         'dark-bg': '#1a1a1a',
         'dark-surface': '#2d2d2d',
         'dark-text': '#ffffff',
       },
      fontFamily: {
        'sans': ['Inter', 'system-ui', 'sans-serif'],
      },
      animation: {
        'fade-in': 'fadeIn 0.6s ease-in-out',
        'slide-up': 'slideUp 0.4s ease-out',
        'scale-in': 'scaleIn 0.3s ease-out',
        'flip': 'flip 0.6s ease-in-out',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideUp: {
          '0%': { transform: 'translateY(20px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
        scaleIn: {
          '0%': { transform: 'scale(0.95)', opacity: '0' },
          '100%': { transform: 'scale(1)', opacity: '1' },
        },
        flip: {
          '0%': { transform: 'rotateY(0deg)' },
          '100%': { transform: 'rotateY(180deg)' },
        },
      },
      spacing: {
        '18': '4.5rem',
        '88': '22rem',
      },
      fontSize: {
        'xs': ['0.75rem', { lineHeight: '1rem' }],
        'sm': ['0.875rem', { lineHeight: '1.25rem' }],
        'base': ['1rem', { lineHeight: '1.5rem' }],
        'lg': ['1.125rem', { lineHeight: '1.75rem' }],
        'xl': ['1.25rem', { lineHeight: '1.75rem' }],
        '2xl': ['1.5rem', { lineHeight: '2rem' }],
        '3xl': ['1.875rem', { lineHeight: '2.25rem' }],
        '4xl': ['2.25rem', { lineHeight: '2.5rem' }],
        '5xl': ['3rem', { lineHeight: '1' }],
        '6xl': ['3.75rem', { lineHeight: '1' }],
      },
    },
  },
  plugins: [
    // Custom plugin for motion-safe animations
    function({ addUtilities, theme }) {
      const newUtilities = {
        '.motion-safe\\:transition': {
          '@media (prefers-reduced-motion: no-preference)': {
            transition: 'all 0.3s ease-in-out',
          },
        },
        '.motion-safe\\:hover\\:scale-105': {
          '@media (prefers-reduced-motion: no-preference)': {
            '&:hover': {
              transform: 'scale(1.05)',
            },
          },
        },
        '.motion-safe\\:hover\\:rotate-1': {
          '@media (prefers-reduced-motion: no-preference)': {
            '&:hover': {
              transform: 'rotate(1deg)',
            },
          },
        },
      }
      addUtilities(newUtilities)
    }
  ],
} 