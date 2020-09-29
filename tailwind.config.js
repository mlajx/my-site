const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: [],
    theme: {
        colors: {},
        textColor: {
            primary: 'var(--color-text-primary)',
            secondary: 'var(--color-text-secondary)',
            name: 'var(--color-text-name)',
            title: 'var(--color-text-title)',
            content: 'var(--color-text-content)',
            'timeline-date': '#969696',
            white: 'var(--color-text-white)'
        },
        backgroundColor: {
            primary: 'var(--color-bg-primary)',
            secondary: 'var(--color-bg-secondary)',
            'my-experience': 'var(--color-bg-my-experience)',
            card: 'var(--color-bg-card)',
            white: 'var(--color-bg-white)'
        },
        extend: {
            container: {
                center: true
            },
            fontFamily: {
                sans: [
                    'Montserrat',
                    ...defaultTheme.fontFamily.sans,
                ]
            },
            margin: {
                '1.5': '0.375rem',
                '-1.5': '-0.375rem'
            }
        },
    },
    variants: {},
    plugins: [],
}
