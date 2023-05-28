// const slider = document.querySelector('.slider');
// const slides = slider.querySelectorAll('.slider-item');
// const prevBtn = document.querySelector('.slider-control.prev');
// const nextBtn = document.querySelector('.slider-control.next');
// const slideWidth = slides[0].offsetWidth;

// let currentIndex = 0;

// function showSlide(index) {
//     const allSlides = slider.querySelectorAll('.slider-item');
//     const currentSlide = allSlides[index];
//     allSlides.forEach(item => item.classList.remove('active'));
//     currentSlide.classList.add('active');
// }

// function nextSlide() {
//     if (currentIndex < slides.length - 1) {
//         currentIndex++;
//     } else {
//         currentIndex = 0;
//     }
//     slider.classList.add('move-next');
//     setTimeout(() => {
//         slider.classList.remove('move-next');
//         showSlide(currentIndex);
//     }, 500);
// }

// function prevSlide() {
//     if (currentIndex > 0) {
//         currentIndex--;
//     } else {
//         currentIndex = slides.length - 1;
//     }
//     slider.classList.add('move-prev');
//     setTimeout(() => {
//         slider.classList.remove('move-prev');
//         showSlide(currentIndex);
//     }, 500);
// }

// prevBtn.addEventListener('click', prevSlide);
// nextBtn.addEventListener('click', nextSlide);

// showSlide(currentIndex);

// setInterval(nextSlide, 5000);

// скрипт для слайдера отзывов
let viewport = document.querySelector(".certificates__slider__pictures").offsetWidth;
let btnNext = document.getElementById("next");
let btnPrev = document.getElementById("prev");
let slider = document.querySelector("div.certificates__slider__slider");
let viewSliders = document.querySelectorAll(".certificates__slider__slide");
let count = viewSliders.length;
let viewSlide = 0;
let previous = count - 1;
let next = 1;
let flagnext = false;
let flagprevious = false;
let image_size = Math.floor(viewport / 2);

btnNext.addEventListener("click", function () {
    flagnext = true;
    if (flagprevious) {
        viewSlide = previous;
        flagprevious = false;
    }

    if (viewSlide < count - 1) {
        viewSlide++;
        if (viewSlide + 1 == count) {
            next = 0;
        }
        else {
            next = viewSlide + 1;
        }
    } else {
        viewSlide = 0;
        next = viewSlide + 1;
    }

    showImage(viewSlide, next);
    //viewSliders[viewSlide].classList.add("previous");
    //viewSliders[next].classList.add("next");
});

btnPrev.addEventListener("click", function () {
    flagprevious = true;
    if (flagnext) {
        viewSlide = next;
        flagnext = false;
    }

    if (viewSlide > 0) {
        viewSlide--;
        if (viewSlide == 0) {
            previous = count - 1;
        }
        else {
            previous = viewSlide - 1;
        }
    } else {
        viewSlide = count - 1;
        previous = viewSlide - 1;
    }
    showImage(previous, viewSlide);
});

function showImage(previous, next) {
    for (let slide of viewSliders) {
        slide.classList.remove("next");
        slide.classList.remove("previous");
    }
    viewSliders[previous].classList.add("previous");
    viewSliders[next].classList.add("next");
}
showImage(viewSlide, next);
