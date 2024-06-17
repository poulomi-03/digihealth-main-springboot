document.addEventListener('DOMContentLoaded', () => {
  const carouselInner = document.querySelector('.carousel-inner');
  const carouselItems = document.querySelectorAll('.carousel-item');
  const totalItems = carouselItems.length;
  let currentIndex = 0;
  const intervalTime = 4000; // Set the interval time to 1000 milliseconds (1 second)

  function showNextSlide() {
    currentIndex++;
    if (currentIndex === totalItems) {
      currentIndex = 0;
      carouselInner.style.transition = 'none'; // Disable transition to reset position instantly
      carouselInner.style.transform = `translateX(0)`;
      setTimeout(() => {
        carouselInner.style.transition = 'transform 1s ease'; // Re-enable transition
        currentIndex = 1;
        carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
      }, 50);
    } else {
      carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
  }

  setInterval(showNextSlide, intervalTime);
});
