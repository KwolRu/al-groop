document.addEventListener('DOMContentLoaded', function() {
    // Select text elements and images separately
    const textElements = document.querySelectorAll('p, h1, h2, h3, h4, h5, h6, span, a');
    const imageElements = document.querySelectorAll('img');
    
    // Calculate viewport height for dynamic rootMargin
    const viewportHeight = window.innerHeight;
    const rootMarginValue = `${viewportHeight * 0.1}px 0px`;
    
    // Set initial state for all text elements
    textElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(40px)';
        element.style.transition = 'transform 0.8s ease-out, opacity 0.6s ease';
    });
    
    // Set initial state for all image elements with more aesthetic properties
    imageElements.forEach(image => {
        image.style.opacity = '0';
        image.style.transform = 'scale(0.92)';
        image.style.transition = 'transform 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 0.8s ease';
        image.style.filter = 'blur(5px)';
    });
    
    // Create an Intersection Observer for text elements
    const textObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Reduce delay for smoother scrolling
                const delay = Math.random() * 0.15;
                
                entry.target.style.transitionDelay = `${delay}s`;
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                
                // Unobserve after animation
                textObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.01, // Trigger with minimal visibility
        rootMargin: `${rootMarginValue}` // Start animations earlier based on viewport height
    });
    
    // Create an Intersection Observer for image elements with custom settings
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Stagger image animations slightly more
                const delay = 0.1 + (Math.random() * 0.2);
                
                entry.target.style.transitionDelay = `${delay}s`;
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'scale(1)';
                entry.target.style.filter = 'blur(0px)';
                
                // Unobserve after animation
                imageObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1, // Trigger when more of the image is visible
        rootMargin: `${rootMarginValue}`
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
            textObserver.observe(element);
        }
    });
    
    // Handle images that are already in view
    imageElements.forEach(image => {
        const rect = image.getBoundingClientRect();
        if (rect.top < viewportHeight) {
            // Image is already visible, animate immediately with minimal delay
            setTimeout(() => {
                image.style.opacity = '1';
                image.style.transform = 'scale(1)';
                image.style.filter = 'blur(0px)';
            }, 100 + Math.random() * 150);
        } else {
            // Observe images not yet in view
            imageObserver.observe(image);
        }
    });
});
