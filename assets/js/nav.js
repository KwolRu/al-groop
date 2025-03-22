document.addEventListener('DOMContentLoaded', function() {
  // Set scroll margin for section headings
  document.querySelectorAll('section[id]').forEach(section => {
    section.style.scrollMarginTop = '80px';
  });

  // Add smooth scrolling for all anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop,
          behavior: 'smooth'
        });
      }
    });
  });
});

