              
new Swiper('.Card-wrapper', {
  loop: true,
  spaceBetween: 30,

  pagination: {
    el: '.swiper-pagination',
     clickable:true,
     dynamic: true
  },

  
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  
  breakpoints: {
    0: {
       slidesPerView: 1 
    },
    768: {
       slidesPerView: 2 
    },
    1024: {
        slidesPerView: 3
    },
  }
});        

