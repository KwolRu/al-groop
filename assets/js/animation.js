document.addEventListener('DOMContentLoaded', function() {
    const textElements = document.querySelectorAll('p, h1, h2, h3, h4, h5, h6, span, a');
    
    // Calculate viewport height for dynamic rootMargin
    const viewportHeight = window.innerHeight;
    const rootMarginValue = `${viewportHeight * 0.2}px 0px`;
    
    // Set initial state for all text elements
    textElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'transform 0.6s ease-out, opacity 0.6s ease';
    });
    
    // Create an Intersection Observer with improved settings
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Reduce delay for smoother scrolling
                const delay = Math.random() * 0.15;
                
                entry.target.style.transitionDelay = `${delay}s`;
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                
                // Unobserve after animation
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.01, // Trigger with minimal visibility
        rootMargin: `${rootMarginValue}` // Start animations earlier based on viewport height
    });
    
    // Handle elements that are already in view when page loads
    textElements.forEach(element => {
        const rect = element.getBoundingClientRect();
        if (rect.top < viewportHeight) {
            // Element is already visible, animate immediately with minimal delay
            setTimeout(() => {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }, Math.random() * 100);
        } else {
            // Observe elements not yet in view
            observer.observe(element);
        }
    });
});
