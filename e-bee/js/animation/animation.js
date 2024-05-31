const animation = () => {

  ScrollReveal().reveal('.container:not(.screen-index):not(.header__container)', {
    duration: 1000,
    easing: 'cubic-bezier(0.5, 0, 0, 1)',
    distance: '100px',
    viewFactor: 0
  });
  ScrollReveal().reveal('.footer__contact', {
    opacity: 0,
  });

  ScrollReveal().reveal('.slider', {
    opacity: 0,
  });

  ScrollReveal().reveal('.price__inner', {
    opacity: 0,
    delay: 300,
  });

  ScrollReveal().reveal('.qr__fixed', {
    opacity: 0,
    delay: 5000,
  });
};

animation();
