document.addEventListener('DOMContentLoaded', () => {
    const mobileMenu = document.getElementById('mobile-menu');
    const navbarLinks = document.querySelector('.navbar-container .navbar-links');

    if (mobileMenu && navbarLinks) {
        mobileMenu.addEventListener('click', () => {
            console.log('Menu clicked');
            navbarLinks.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });

        document.addEventListener('click', (event) => {
            const isClickInsideNavbar = mobileMenu.contains(event.target) || navbarLinks.contains(event.target);
            
            if (!isClickInsideNavbar) {
                navbarLinks.classList.remove('active');
                mobileMenu.classList.remove('active');
            }
        });
    }
});
