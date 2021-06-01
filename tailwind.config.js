const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: {
        content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        ],
        options: {
            safelist: ['fill-current', 'h-10', 'h-20', 'w-auto']
        }
    },
    theme: {
        backgroundColor: {
            'header': 'var(--header-bg)',
            'header-chamfer-border': 'var(--header-chamfer-border)',
            'question-mark': 'var(--question-mark-bg)',

            'what-is-dev': 'var(--what-is-dev-bg)',
            'what-is-dev-border': 'var(--what-is-dev-border)',

            'tech-that-i-use': 'var(--tech-that-i-use-bg)',
            'tech-that-i-use-icon': 'var(--tech-that-i-use-icon-bg)',
            'tech-that-i-use-border': 'var(--tech-that-i-use-border)',

            'my-experience': 'var(--my-experience-bg)',
            'my-experience-timeline': 'var(--my-experience-timeline-bg)',
            'my-experience-border': 'var(--my-experience-border)',

            'some-projects': 'var(--some-projects-bg)',
            'some-projects-circle': 'var(--some-projects-circle-bg)',
            'some-projects-border': 'var(--some-projects-border)',

            'social-network': 'var(--social-network-bg)',

            'footer': 'var(--footer-bg)'
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
            textColor: {
                'header-primary': 'var(--header-primary)',
                'header-secondary': 'var(--header-secondary)',

                'question-mark': 'var(--question-mark)',

                'what-is-dev': 'var(--what-is-dev)',

                'tech-that-i-use': 'var(--tech-that-i-use)',
                'tech-that-i-use-icon': 'var(--tech-that-i-use-icon)',

                'my-experience': 'var(--my-experience)',
                'my-experience-date': 'var(--my-experience-date)',

                'some-projects': 'var(--some-projects)',

                'social-network-primary': 'var(--social-network-primary)',
                'social-network-secondary': 'var(--social-network-secondary)',

                'footer': 'var(--footer)',
                'footer-hover': 'var(--footer-hover)'
            },
            gradientColorStops: {
                'underline-light': 'var(--some-projects-underline-start)',
                'underline-dark': 'var(--some-projects-underline-end)',
            },
            margin: {
                '1.5': '0.375rem',
                '-1.5': '-0.375rem'
            },
            boxShadow: {
                'tech-that-i-use': 'var(--tech-that-i-use-shadow)',
            },
        },
    },
    variants: {},
    plugins: [],
}
