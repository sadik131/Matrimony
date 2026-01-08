document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.slider-track');
    const slides = Array.from(document.querySelectorAll('.slider-slide'));
    const nextBtn = document.querySelector('.slider-next');
    const prevBtn = document.querySelector('.slider-prev');
    const container = document.querySelector('.slider-container');

    if (!track || slides.length === 0) return;

    let currentIndex = 0;
    let slideWidth = slides[0].offsetWidth;
    const gap = 16;
    const slideDuration = 3000;
    let autoSlideInterval;

    function getVisibleCount() {
        if (window.innerWidth <= 480) return 1;
        if (window.innerWidth <= 768) return 2;
        return 3;
    }

    let visibleCount = getVisibleCount();

    /* 🔁 CLONE LOGIC */
    const firstClones = slides.slice(0, visibleCount).map(slide => slide.cloneNode(true));
    const lastClones = slides.slice(-visibleCount).map(slide => slide.cloneNode(true));

    lastClones.forEach(clone => track.insertBefore(clone, slides[0]));
    firstClones.forEach(clone => track.appendChild(clone));

    const allSlides = document.querySelectorAll('.slider-slide');

    currentIndex = visibleCount;

    function updateSlider(transition = true) {
        track.style.transition = transition ? 'transform 0.5s ease-in-out' : 'none';
        track.style.transform = `translateX(-${currentIndex * (slideWidth + gap)}px)`;
    }

    updateSlider(false);

    function nextSlide() {
        currentIndex++;
        updateSlider();

        if (currentIndex === allSlides.length - visibleCount) {
            setTimeout(() => {
                currentIndex = visibleCount;
                updateSlider(false);
            }, 500);
        }
    }

    function prevSlide() {
        currentIndex--;
        updateSlider();

        if (currentIndex === 0) {
            setTimeout(() => {
                currentIndex = allSlides.length - visibleCount * 2;
                updateSlider(false);
            }, 500);
        }
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, slideDuration);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    startAutoSlide();

    nextBtn.addEventListener('click', () => {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
    });

    prevBtn.addEventListener('click', () => {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
    });

    container.addEventListener('mouseenter', stopAutoSlide);
    container.addEventListener('mouseleave', startAutoSlide);

    window.addEventListener('resize', () => {
        slideWidth = slides[0].offsetWidth;
        visibleCount = getVisibleCount();
        updateSlider(false);
    });
});
