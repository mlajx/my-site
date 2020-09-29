import anime from 'animejs/lib/anime.es.js';

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.card').forEach(function(el) {
        el.addEventListener('mouseenter', function(e) {
            e.target.style.color = e.target.getAttribute('data-color');
            anime({
                targets: e.target.querySelector('h1'),
                translateY: [-10, 0],
                opacity: 1,
                easing: 'easeOutQuart',
                duration: 300
            });
        });

        el.addEventListener('mouseleave', function(e) {
            e.target.style.color = null;
            anime({
                targets: e.target.querySelector('h1'),
                translateY: [0, -10],
                opacity: 0,
                easing: 'easeOutQuart',
                duration: 300
            });
        });
    })
});
