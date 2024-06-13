document.addEventListener("DOMContentLoaded", function() {
    let slides = document.querySelectorAll('.slide');
    let currentSlide = 0;
    let slideInterval = setInterval(nextSlide, 4000); // Change slide every 3 seconds
  
    function nextSlide() {
      slides[currentSlide].style.display = 'none';
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].style.display = 'block';
    }
  });
  