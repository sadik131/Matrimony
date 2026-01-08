document.addEventListener('DOMContentLoaded', () => {

  const slides = document.getElementById('slides');
  const slideItems = slides.children;
  const prevBtn = document.getElementById('prev');
  const nextBtn = document.getElementById('next');
  const dots = document.querySelectorAll('[data-slide]');

  if (!slides || slideItems.length === 0) return;

  let index = 0;
  const total = slideItems.length;
  let autoSlide;

  function updateSlider() {
    slides.style.transform = `translateX(-${index * 100}%)`;

    dots.forEach(dot => dot.classList.remove('opacity-100'));
    dots[index]?.classList.add('opacity-100');
  }

  function nextSlide() {
    index = (index + 1) % total;
    updateSlider();
  }

  function prevSlide() {
    index = (index - 1 + total) % total;
    updateSlider();
  }

  function startAutoSlide() {
    autoSlide = setInterval(nextSlide, 4000);
  }

  function stopAutoSlide() {
    clearInterval(autoSlide);
  }

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

  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      index = parseInt(dot.dataset.slide);
      updateSlider();
    });
  });

  slides.addEventListener('mouseenter', stopAutoSlide);
  slides.addEventListener('mouseleave', startAutoSlide);

  updateSlider();
  startAutoSlide();
});
