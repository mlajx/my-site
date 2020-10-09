document.addEventListener("DOMContentLoaded", function () {
    resizeChamfer();
    window.addEventListener('resize', resizeChamfer)
});

function resizeChamfer() {

    const chamferOptions = {
        height: 200,
        widthBase: 1920,
        chamferBorder: 8
    }

    document.querySelectorAll('.has-chamfer, .chamfer-border').forEach(function (el) {
        if (!el.hasAttribute('data-default-padding-bottom')) {
            el.setAttribute('data-default-padding-bottom', window.getComputedStyle(el).paddingBottom.replace(/\D/g, ''));
        }

        const paddingBottom = parseInt(el.getAttribute('data-default-padding-bottom'));
        const dynamicHeight = el.getBoundingClientRect().width * chamferOptions.height / chamferOptions.widthBase;
        el.style.paddingBottom = (paddingBottom + dynamicHeight / 2) + 'px';

        const rect = el.getBoundingClientRect();
        const heightPercent = (rect.height - dynamicHeight) * 100 / rect.height;

        el.style.clipPath = `polygon(0% 0%, 100% 0%, 100% ${heightPercent}%, 28% 100%, 0% ${heightPercent}%)`;

        if (el.classList.contains('chamfer-border')) {
            el.style.bottom = -chamferOptions.chamferBorder + 'px';
        }

        if (el.classList.contains('has-chamfer')) {
            const hasChamfer = el.hasAttribute('chamfer-bordered');
            if (hasChamfer) {
                el.style.marginBottom = chamferOptions.chamferBorder + 'px';
            }
            const bgElement = el.parentNode.querySelector('.chamfer-bg');
            if (bgElement) {
                bgElement.style.top = hasChamfer ? (chamferOptions.chamferBorder + 1) + 'px' : '1px';
            }
        }
    });
}
