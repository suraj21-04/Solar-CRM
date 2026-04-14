document.addEventListener('DOMContentLoaded', () => {
    // Navbar Sticky Effect
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Mobile Menu Toggle
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('menu-icon-open');
    const iconClose = document.getElementById('menu-icon-close');

    if (btn) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('active');
            if (menu.classList.contains('active')) {
                iconOpen.style.display = 'none';
                iconClose.style.display = 'block';
            } else {
                iconOpen.style.display = 'block';
                iconClose.style.display = 'none';
            }
        });
    }

    // Mobile Features Accordion
    const featuresBtn = document.getElementById('mobile-features-btn');
    const featuresContent = document.getElementById('mobile-features-content');
    const featuresIcon = document.getElementById('mobile-features-icon');

    if (featuresBtn) {
        featuresBtn.addEventListener('click', () => {
            featuresContent.classList.toggle('active');
            if (featuresContent.classList.contains('active')) {
                featuresIcon.style.transform = 'rotate(180deg)';
            } else {
                featuresIcon.style.transform = 'rotate(0deg)';
            }
        });
    }
});
