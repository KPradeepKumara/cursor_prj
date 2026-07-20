/* Financial Liberty University — small progressive enhancements */
(function () {
    'use strict';

    const nav = document.getElementById('mainNav');
    const toTop = document.querySelector('.flu-to-top');

    const onScroll = () => {
        const y = window.scrollY;
        if (nav) nav.classList.toggle('scrolled', y > 40);
        if (toTop) toTop.classList.toggle('show', y > 400);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // Reveal-on-scroll for key blocks
    const revealTargets = document.querySelectorAll(
        '.flu-program-card, .flu-feature, .flu-stat, .flu-about-photo, .flu-about-name'
    );
    revealTargets.forEach((el) => el.classList.add('reveal'));

    if ('IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        revealTargets.forEach((el) => io.observe(el));
    } else {
        revealTargets.forEach((el) => el.classList.add('visible'));
    }
})();
