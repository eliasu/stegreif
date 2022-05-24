//--------------------------------------------------------------------------
// Tailwind site configuration
//--------------------------------------------------------------------------
//
// Use this file to completely define the current sites design system by
// adding and extending to Tailwinds default utility classes.
//

const defaultTheme = require('tailwindcss/defaultTheme')
const plugin = require('tailwindcss/plugin')
const colors = require('tailwindcss/colors')

function withOpacity(variableName) {
	return ({ opacityValue }) => {
	  if (opacityValue !== undefined) {
		 return `rgba(var(${variableName}), ${opacityValue})`
	  }
	  return `rgb(var(${variableName}))`
	}
}

module.exports = {
	presets: [],
	theme: {
		screens: {
			'xs': '475px',
			...defaultTheme.screens,
		 },
		
		colors: {
			black: '#020122',
			white: '#F5F1EB',
			light: "#F5F1EB",
			yellow: "#FFBD42",
			green: "#3C887E",
			blue: "#030233",
			darkblue: "#020122",

			// get themed color by f.Ex. text-skin-base
			skin: {
				base: {
					DEFAULT: withOpacity('--color-base'),
				},
				inverted: {
					DEFAULT: withOpacity('--color-inverted'),
				},
				primary: {
					DEFAULT: withOpacity('--color-primary'),
				},
				accent: {
					DEFAULT: withOpacity('--color-accent'),
				},
			}
		},
		
		fontSize: {
			// only sizing and letter spacing because line-height differs between paragrahs and headings
			'xs': ['clamp(.75rem, 4vw, .875rem)', { letterSpacing: '1px' }], 			/* 12px */
			'sm': ['clamp(.875rem, 4vw, 1rem)', { letterSpacing: '1px' }], 			/* 14px */
			'base': ['clamp(1rem, 8vw, 1.2rem)', { letterSpacing: '1px' }], 			/* 16px */
			'lg': ['clamp(1.125rem, 8vw, 1.3rem)',  { letterSpacing: '1px' }], 		/* 18px */
			'xl': ['clamp(1.25rem, 8vw, 1.75rem)', { letterSpacing: '1px' }], 		/* 20px */
			'2xl': ['clamp(1.5rem, 8vw, 2rem)', { letterSpacing: '1px' }], 			/* 24px */
			'2-5xl': ['clamp(1.75rem, 8vw, 2.2rem)', { letterSpacing: '1px' }], 		/* 28px */
			'3xl': ['clamp(2rem, 8vw, 2.5rem)', { letterSpacing: '1.5px' }], 			/* 32px */
			'4xl': ['clamp(2.5rem, 8vw, 3rem)', { letterSpacing: '2px' }], 			/* 40px */
			'5xl': ['clamp(3rem, 8vw, 3.5rem)', { letterSpacing: '2px' }], 			/* 48px */
			'6xl': ['clamp(4rem, 7vw, 4.5rem)', { letterSpacing: '2px' }], 			/* 64px */
			'7xl': ['clamp(4.5rem, 8vw, 5rem)', { letterSpacing: '3px' }], 			/* 72px */
			'8xl': ['clamp(6rem, 8.5vw, 6.5rem)', { letterSpacing: '3px' }], 			/* 96px */
			'9xl': ['clamp(8rem, 8.5vw, 10rem)', { letterSpacing: '3px' }], 			/* 128px */
		},

		lineHeight: {
			s: '120%',
			m: '140%',
			l: '160%',
		},
		

		extend: {			
			gridTemplateColumns: {
				// Simple 16 column grid
				'18': 'repeat(18, minmax(0, 1fr))',
			 },
			
			// Set default transition durations and easing when using the transition utilities.
			transitionDuration: {
				DEFAULT: '300ms',
			},
			transitionTimingFunction: {
				DEFAULT: 'cubic-bezier(0.4, 0, 0.2, 1)',
			},
		},
		// Remove the font families you don't want to use.
		fontFamily: {
			sans: [
			'Plus Jakarta Sans',
			...defaultTheme.fontFamily.sans,
			],
		},
		// The font weights available for this site.
		fontWeight: {
			normal: 400,
			bold: 700,
			extrabold: 800,
		},
	},
	plugins: [
		plugin(function({ addBase, theme }) {
			addBase({
			// Default color transition on links unless user prefers reduced motion.
			'@media (prefers-reduced-motion: no-preference)': {
				'a': {
					transition: 'color .3s ease-in-out',
				},
			},
			'html': {
					color: theme('white'),
					fontFamily: theme('fontFamily.sans'),
			},
			})
		}),

		// Custom components for this particular site.
		plugin(function({ addComponents, theme }) {
			const components = {
			}
			addComponents(components)
		}),

		// Custom utilities for this particular site.
		plugin(function({ addUtilities, theme, variants }) {
			const newUtilities = {
			}
			addUtilities(newUtilities)
		}),
	]
}
