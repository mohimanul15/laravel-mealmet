// Mobile menu toggle for all headers
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButtons = document.querySelectorAll('#mobile-menu-button');
    const mobileMenus = document.querySelectorAll('#mobile-menu');
    const closeMenuButtons = document.querySelectorAll('#close-menu');
    
    // Toggle mobile menu
    mobileMenuButtons.forEach((button, index) => {
        button.addEventListener('click', function() {
            mobileMenus[index].classList.toggle('hidden');
        });
    });
    
    // Close mobile menu
    closeMenuButtons.forEach((button, index) => {
        button.addEventListener('click', function() {
            mobileMenus[index].classList.add('hidden');
        });
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        mobileMenus.forEach(menu => {
            if (!menu.contains(event.target) && !event.target.closest('#mobile-menu-button')) {
                menu.classList.add('hidden');
            }
        });
    });
    
    // Dropdown hover functionality
    const dropdowns = document.querySelectorAll('.group');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseenter', function() {
            const menu = this.querySelector('.absolute');
            if (menu) {
                menu.classList.remove('opacity-0', 'invisible');
                menu.classList.add('opacity-100', 'visible');
            }
        });
        
        dropdown.addEventListener('mouseleave', function() {
            const menu = this.querySelector('.absolute');
            if (menu) {
                menu.classList.remove('opacity-100', 'visible');
                menu.classList.add('opacity-0', 'invisible');
            }
        });
    });
});