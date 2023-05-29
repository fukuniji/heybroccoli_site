
// setInterval(nextSlide, 5000);

// скрипт для слайдера отзывов
let viewport = document.querySelector(".reviews__slider__pictures").offsetWidth;
let btnNext = document.getElementById("next");
let btnPrev = document.getElementById("prev");
let slider = document.querySelector("div.reviews__slider__slider");
let viewSliders = document.querySelectorAll(".reviews__slider__slide");
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
