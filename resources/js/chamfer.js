document.addEventListener("DOMContentLoaded", function () {
    resizeChamfer();
    window.addEventListener('resize', resizeChamfer)
});

function resizeChamfer() {

    const chamferOptions = {
        height: 200,
        widthBase: 1920
    }

    document.querySelectorAll('.has-chamfer').forEach(function (el) {
        el.classList.add('relative', 'z-10');
        if (!el.hasAttribute('data-default-padding-bottom')) {
            el.setAttribute('data-default-padding-bottom', window.getComputedStyle(el).paddingBottom.replace(/\D/g, ''));
        }

        const paddingBottom = parseInt(el.getAttribute('data-default-padding-bottom'));
        const dynamicHeight = el.getBoundingClientRect().width * chamferOptions.height / chamferOptions.widthBase;
        el.style.paddingBottom = (paddingBottom + dynamicHeight) + 'px';

        const rect = el.getBoundingClientRect();
        const heightPercent = (rect.height - dynamicHeight) * 100 / rect.height;

        el.style.clipPath = `polygon(0% 0%, 100% 0%, 100% ${heightPercent}%, 28% 100%, 0% ${heightPercent}%)`;

        const bgElement = el.parentNode.querySelector('.has-chamfer-bg');
        if (bgElement) {
            bgElement.classList.add('w-full', 'left-0', 'bottom-0', 'absolute', 'z-0', el.getAttribute('data-bg-chamfer'));
            bgElement.style.height = (paddingBottom + dynamicHeight) + 'px';
        }
    });
}
