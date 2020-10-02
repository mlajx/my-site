const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: [],
    theme: {
        colors: {
            white: '#fff',
            underline: 'var(--color-text-secondary-light)'
        },
        textColor: {
            primary: 'var(--color-text-primary)',
            secondary: 'var(--color-text-secondary)',
            'secondary-light': 'var(--color-text-secondary-light)',
            name: 'var(--color-text-name)',
            title: 'var(--color-text-title)',
            content: 'var(--color-text-content)',
            'timeline-date': '#969696',
            white: 'var(--color-text-white)',
            popup: 'var(--color-text-popup)',
            footer: 'var(--color-text-footer)'
        },
        backgroundColor: {
            primary: 'var(--color-bg-primary)',
            secondary: 'var(--color-bg-secondary)',
            'my-experience': 'var(--color-bg-my-experience)',
            card: 'var(--color-bg-card)',
            white: 'var(--color-bg-white)',
            popup: 'var(--color-bg-popup)',
            social: 'var(--color-bg-social)',
            footer: 'var(--color-bg-footer)'
        },
        extend: {
            container: {
                center: true,
                padding: '2rem',
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
