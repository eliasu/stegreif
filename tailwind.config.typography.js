//--------------------------------------------------------------------------
// Tailwind Typography configuration
//--------------------------------------------------------------------------
//
// Here you may overwrite the default Tailwind Typography (or prosé) styles or configure certain variants.
// More info: https://tailwindcss.com/docs/typography-plugin.
//

const { fontSize } = require('tailwindcss/defaultTheme')
const plugin = require('tailwindcss/plugin')

function textSize(sizeVariable) {
	return {
    fontSize: 'theme("fontSize.' + sizeVariable + '")',
    letterSpacing: 'theme("fontSize.' + sizeVariable + '.1.letterSpacing")',
  }
}

module.exports = {
  theme: {
    extend: {
      typography: (theme) => ({
        DEFAULT: {
          css: {
            'ul > li p, ol > li p': {
              marginTop: '0em !important',
              marginBottom: '0em !important',
            },

            // bard addon for colored spans
            '[class~=text-skin-primary]': {
              color: 'theme("colors.skin.primary.DEFAULT")',
            },

            // All Texts
            'h1, h2, h3, h4, h5, h6, p, strong, em': {
              color: 'theme("colors.skin.base.DEFAULT")',
            },
            // All Headings
            'h1, h2, h3, h4, h5, h6': {
              color: 'theme("colors.skin.base.DEFAULT")',
              lineHeight: 'theme("lineHeight.s")',
              fontWeight: '800',
              textTransform: 'uppercase',
            },
            
            'h5': { 
              fontWeight: '700',
              textTransform: 'none',
            },

            'p': textSize("base"),
            'h2': textSize("2xl"),
            'h3': textSize("lg"),
            'h4': textSize("base"),
            'h5': textSize("sm"),
            'h6': textSize("xs"),
            
            'h2': {
              '@media (min-width: theme("screens.sm"))': textSize("4xl"),
              '@media (min-width: theme("screens.md"))': textSize("5xl"),
              '@media (min-width: theme("screens.xl"))': textSize("6xl"),
            },
            
            'h3': {
              '@media (min-width: theme("screens.sm"))': textSize("xl"),
              '@media (min-width: theme("screens.md"))': textSize("2xl"),
              '@media (min-width: theme("screens.xl"))': textSize("3xl"),
            },
            
            'h4': {
              '@media (min-width: theme("screens.md"))': textSize("2xl"),
            },
          },
        },
      }),
    }
  },
  plugins: [
    require('@tailwindcss/typography')({
      modifiers: [],
    }),
  ]
}
