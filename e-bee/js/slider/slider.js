if (window.innerWidth <= 1200) {
  new Swiper('.advantages__slider', {
    direction: 'horizontal',
    slidesPerView: 'auto',
    spaceBetween: 10,
    rewind: true,

    navigation: {
      nextEl: '.advantages__button--next',
      prevEl: '.advantages__button--prev',
    },
  });

  new Swiper('.how-rent__slider', {
    direction: 'horizontal',
    slidesPerView: 'auto',
    spaceBetween: 10,
    rewind: true,

    navigation: {
      nextEl: '.how-rent__button--next',
      prevEl: '.how-rent__button--prev',
    },
  });
}
