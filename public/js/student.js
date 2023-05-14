const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slides img");
const slideCount = slides.length;
const slideWidth = slides[0].clientWidth;
let currentIndex = 0;

function init() {
  slides.forEach((slide, index) => {
    slide.style.left = `${index * 100}%`;
  });
  setInterval(() => {
    currentIndex = (currentIndex + 1) % slideCount;
    slide();
  }, 3000);
}

function slide() {
  const slideValue = -currentIndex * slideWidth;
  slides.forEach((slide) => {
    slide.style.transform = `translateX(${slideValue}px)`;
  });
}

init();
