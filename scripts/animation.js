const animItems = document.querySelectorAll('._anim_items')

if (animItems.length > 0) {
    // событие для анимации - это скролл
    window.addEventListener('scroll', animOnScroll)
    function animOnScroll() {
        for (let index = 0; index < animItems.length; index++) {
            //получаем элемент из множества для анимации
            const animItem = animItems[index];
            //высота обьекта
            const animItemHeight = animItem.offsetHeight;
            //позиция объекта относительно верха экрана
            const animItemOffset = offset(animItem).top;
            const animStart = 4;
            // точка старта
            let animItemPoint = window.innerHeight - animItemHeight / animStart;
            if (animItemHeight > window.innerHeight) {
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }
            if ((window.pageYOffset > animItemOffset - animItemPoint) && window.pageYOffset < (animItemOffset + animItemHeight)) {
                animItem.classList.add('_active');
            } else {
                // чтобы при повторной прокрутке, анимация не срабатывала
                if (!animItem.classList.contains('_anim-no-hide')) {
                    //убираем класс для анимации
                    animItem.classList.remove('_active');
                }
            }
        }
    }
    function offset(el) {
        const rect = el.getBoundingClientRect(),
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
    }
    setTimeout(() => {
        animOnScroll();
    }, 300);
}
