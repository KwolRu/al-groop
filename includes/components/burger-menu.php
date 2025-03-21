<div class="burger-menu">
    <button class="burger-button" aria-label="Menu" aria-expanded="false">
        <div class="burger-lines">
            <span></span>
            <span></span>
        </div>
    </button>
    
    <div class="menu-overlay">
        <nav class="menu-content">
            <ul>
                <li><a href="#alliance-agency">Аlliance agency</a></li>
                <li><a href="#alliance-invest">Аlliance invest</a></li>
                <li><a href="#alliance-style">Аlliance style</a></li>
                <li><a href="#design">Design</a></li>
                <li><a href="#flipping-point">Flipping point</a></li>
                <li><a href="#flipping-point-uae">Flipping point ОАЭ</a></li>
                <li><a href="#dom-club">Dom club</a></li>
                <li><a href="#hr-alliance">HR Alliance</a></li>
                <li><a href="#quick-dev">Quick-dev</a></li>
                <li><a href="#charity-fund">Благотворительный фонд</a></li>
            </ul>
        </nav>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger-button');
    const menu = document.querySelector('.menu-overlay');
    const menuItems = document.querySelectorAll('.menu-overlay li');
    
    // Add index for staggered animation
    menuItems.forEach((item, index) => {
        item.style.setProperty('--i', index);
    });
    
    burger.addEventListener('click', function() {
        this.classList.toggle('active');
        menu.classList.toggle('active');
        
        // Update aria-expanded state
        const isExpanded = this.classList.contains('active');
        this.setAttribute('aria-expanded', isExpanded);
        
        // Lock/unlock body scroll
        document.body.style.overflow = isExpanded ? 'hidden' : '';
    });
    
    // Close menu when clicking on links
    document.querySelectorAll('.menu-overlay a').forEach(link => {
        link.addEventListener('click', function() {
            burger.classList.remove('active');
            menu.classList.remove('active');
            burger.setAttribute('aria-expanded', false);
            document.body.style.overflow = '';
        });
    });
    
    // Close on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && menu.classList.contains('active')) {
            burger.classList.remove('active');
            menu.classList.remove('active');
            burger.setAttribute('aria-expanded', false);
            document.body.style.overflow = '';
        }
    });
});
</script>
