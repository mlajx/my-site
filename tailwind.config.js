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
            white: 'var(--color-text-white)'
        },
        backgroundColor: {
            primary: 'var(--color-bg-primary)',
            secondary: 'var(--color-bg-secondary)',
            white: 'var(--color-bg-white)'
        },
        extend: {
            container: {
                center: true
            },
        },
    },
    variants: {},
    plugins: [],
}
