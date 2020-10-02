import anime from 'animejs/lib/anime.es.js';
import helpers from './helpers';

function onScroll() {

    for(let key in animations) {
        if(animations.hasOwnProperty(key)) {
            const animation = animations[key];
            if (!animation.animated && helpers.isScrolledIntoView(animation.element)) {
                animation.animated = !animation.animated;
                animation.timeline.play();
            }
        }
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
    },
    mySocial: {
        element: document.querySelector('.social-wrapper'),
        animated: false,
        timeline: anime.timeline({
            easing: 'easeInOutSine',
            duration: 1500,
            autoplay: false
        }).add({
            targets: '.social-item path',
            strokeDashoffset: [anime.setDashoffset, 0]
        }).add({
            targets: '.social-item svg',
            fill: ['rgba(0,0,0,0)', '#fff']
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
            anime.timeline({
                easing: 'easeInQuad',
                duration: 100
            }).add({
                targets: el.querySelector('.underline'),
                width: '100%',
            }).add({
                targets: el.querySelector('.project-popup'),
                opacity: 1,
                translateX: [10, 0],
                delay: 0
            });
        });

        el.addEventListener('mouseleave', function () {
            anime.timeline({
                easing: 'easeInQuad',
                duration: 100
            }).add({
                targets: el.querySelector('.underline'),
                width: 0,
            }).add({
                targets: el.querySelector('.project-popup'),
                opacity: 0,
                translateX: [0, 10],
                delay: 0
            });
        });
    });
});
