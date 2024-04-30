/** @type {import('tailwindcss').Config} config */
const config = {
	content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
	theme: {
	  fontFamily: {
			  primary: 'Inter',
			  secondary: 'Work Sans',
		  },
	  colors: {
			  'primary': '#1D4ED8',
			  'accent': '#B48E42',
			  'black': '#0A0A0B',
			  'white': '#FFFFFF',
			  'lower': '#F4F4F5',
			  'low': '#D4D4D8',
			  'medium': '#71717A',
			  'high': '#3F3F46',
			  'higher': '',
		  },
	  fontSize: {
			  xs: '12px',
			  sm: '14px',
			  base: '16px',
		'md': '18px',
			  lg: '20px',
			  xl: '24px',
			  '2xl': '30px',
			  '3xl': '36px',
			  '4xl': '48px',
		  },
	  extend: {
		colors: {}, // Extend Tailwind's default colors
	  },
	},
	plugins: [],
  };

  export default config;
