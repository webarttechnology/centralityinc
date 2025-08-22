


    var swiper = new Swiper(".banner .mySwiper", {
      navigation: {
        nextEl: ".banner .swiper-button-next",
        prevEl: ".banner .swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });



     var swiper = new Swiper(".home-news .mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
        navigation: {
        nextEl: ".home-news .swiper-button-next",
        prevEl: ".home-news .swiper-button-prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });



     var swiper = new Swiper(".home-solution .mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
        navigation: {
        nextEl: ".home-solution .swiper-button-next",
        prevEl: ".home-solution .swiper-button-prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });



  var swiper = new Swiper(".mySwiper.event-slider", {
  loop: true,
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "3",
 
  coverflowEffect: {
    rotate: 0,
    stretch: 10,
    depth: 70,
    modifier: 1,
    slideShadows: false,
  },
  // navigation: {
  //   nextEl: '.slider1-next',
  //   prevEl: '.slider1-prev',
  // },
  pagination: {
    el: ".slider1-pagination",
    clickable: true,
  },
});


