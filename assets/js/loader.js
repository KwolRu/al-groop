document.addEventListener('DOMContentLoaded', function() {
    const progressBar = document.getElementById('loader-progress-bar');
    const percentageText = document.getElementById('loader-percentage');
    const loaderOverlay = document.getElementById('loader-overlay');
    
    let loadProgress = 0;
    let currentDisplayNumber = 0;
    let lastTimestamp = null;
    
    // Ultra-smooth loading calculation (Apple-style)
    const baseSpeed = 40; // Slow, steady progression
    const initialDelay = 300; // Small delay before starting
    let hasStarted = false;
    
    // Very smooth progress animation
    function updateProgress(timestamp) {
        if (!hasStarted) {
            setTimeout(() => { 
                hasStarted = true; 
                requestAnimationFrame(updateProgress);
            }, initialDelay);
            return;
        }
        
        if (!lastTimestamp) lastTimestamp = timestamp;
        const elapsed = timestamp - lastTimestamp;
        lastTimestamp = timestamp;
        
        // Calculate a silky-smooth progress rate that slows down naturally
        const remainingProgress = 100 - loadProgress;
        const progressRate = baseSpeed * Math.pow(remainingProgress / 100, 0.8); // Gentle deceleration
        
        // Apply micro-increment based on elapsed time
        const increment = (progressRate * elapsed) / 1000;
        
        if (loadProgress < 99) {
            loadProgress += increment;
            loadProgress = Math.min(loadProgress, 99);
            
            // Update progress bar with the ultra-smooth transition set in CSS
            progressBar.style.width = loadProgress + '%';
            
            // Update percentage text without animation
            updatePercentageText(Math.floor(loadProgress));
            
            requestAnimationFrame(updateProgress);
        }
    }
    
    // Simple percentage text update without animation
    function updatePercentageText(value) {
        // Only update when integer changes to reduce DOM operations
        if (value !== currentDisplayNumber) {
            currentDisplayNumber = value;
            percentageText.textContent = value + '%';
        }
    }
    
    // Start the animation after a short delay
    setTimeout(() => {
        requestAnimationFrame(updateProgress);
    }, 100);
    
    // When page is fully loaded, complete to 100%
    window.addEventListener('load', function() {
        // Ensure at least 2.5 seconds of loading experience
        const minimumLoadingTime = 2500; 
        const loadStartTime = performance.now();
        
        const finishLoading = function() {
            // Apply the final progress with the smooth transition from CSS
            loadProgress = 100;
            progressBar.style.width = '100%';
            updatePercentageText(100);
            
            // Add a slight delay before hiding to allow the progress bar to complete
            setTimeout(completeLoading, 800);
        };
        
        const timeElapsed = performance.now() - loadStartTime;
        const remainingTime = Math.max(0, minimumLoadingTime - timeElapsed);
        
        setTimeout(() => {
            // Ensure a smooth transition to 100%
            finishLoading();
        }, remainingTime);
    });
    
    function completeLoading() {
        document.body.classList.add('loaded');
        
        // Fade out the loader with a longer, smoother transition
        loaderOverlay.style.opacity = 0;
        
        // After transition effect, remove the loader completely
        setTimeout(function() {
            loaderOverlay.style.display = 'none';
        }, 1000);
    }
});
