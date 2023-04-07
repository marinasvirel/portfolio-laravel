const swiper = new Swiper('.swiper', {
  direction: 'horizontal',
  loop: true,
  speed: 1000,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

const swiper2 = new Swiper('.swiper-2', {
  direction: 'horizontal',
  loop: true,
  speed: 1000,
  slidesPerView: 1,
  spaceBetween: 0,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    1000: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
});

const upButton = document.querySelector(".footer-up");

upButton.addEventListener('click', function () {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
});

const switchBtn = document.querySelector(".header-switch");
const body = document.querySelector("body");

switchBtn.addEventListener("click", function(){
  body.classList.toggle("dark");
})

