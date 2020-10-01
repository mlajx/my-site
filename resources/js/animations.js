import anime from 'animejs/lib/anime.es.js';
import helpers from './helpers';

function onScroll() {
    if (!animations.whatIsDevWebFullStack.animated && helpers.isScrolledIntoView(animations.whatIsDevWebFullStack.element)) {
        animations.whatIsDevWebFullStack.animated = !animations.whatIsDevWebFullStack.animated;
        animations.whatIsDevWebFullStack.timeline.play();
    }
}

let animations = {
    whatIsDevWebFullStack: {
        element: document.querySelector('#what-is-dev-web-full-stack'),
        animated: false,
        timeline: anime.timeline({
            easing: 'easeInOutCubic',
            duration: 750,
            autoplay: false
        }).add({
            targets: '#what-is-dev-web-full-stack',
            height: '100%'
        })
            .add({
                targets: '#what-is-dev-web-full-stack h1',
                opacity: 1,
                translateY: [-20, 0]
            })
            .add({
                targets: '#what-is-dev-web-full-stack p',
                opacity: 1,
                delay: anime.stagger(600),
                translateX: function (el, i) {
                    if (i % 2) {
                        return [20, 0];
                    }
                    return [-20, 0];
                },
            })
    }
}

document.addEventListener("DOMContentLoaded", function () {
    onScroll();
    window.addEventListener('scroll', onScroll);

    document.querySelectorAll('.timeline-item').forEach(function (el) {
        let animated = false;
        const animation = function () {
            if (helpers.isScrolledIntoView(el) && !animated) {
                const direction = el.classList.contains('right') ? 10 : -10;
                animated = !animated;
                anime.timeline({
                    easing: 'easeInOutCubic',
                    duration: 750
                }).add({
                    targets: el.querySelector('.circle'),
                    opacity: 1,
                }).add({
                    targets: el.querySelector('.line'),
                    opacity: 1,
                    height: el.querySelector('.content').getBoundingClientRect().height
                }).add({
                    targets: el.querySelector('.content').children,
                    opacity: 1,
                    translateX: [direction, 0],
                    delay: anime.stagger(600),
                });
            }
        }
        animation();
        window.addEventListener('scroll', animation);
    });

    document.querySelectorAll('.project-item').forEach(function (el) {
        el.addEventListener('mouseenter', function () {
            anime({
                targets: el.querySelector('.underline'),
                width: '100%',
                easing: 'easeInQuad',
                duration: 100
            });
        });

        el.addEventListener('mouseleave', function () {
            anime({
                targets: el.querySelector('.underline'),
                width: 0,
                easing: 'easeInQuad',
                duration: 100
            });
        });
    })

});
