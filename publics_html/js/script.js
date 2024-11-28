document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle (if needed)
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('nav ul');

    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
    }

    // Smooth Scrolling for Navigation
    const navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Only prevent default and scroll if it's an internal link
            if (this.getAttribute('href').startsWith('#') || 
                this.getAttribute('href').startsWith(window.location.pathname + '#')) {
                e.preventDefault();
                const targetId = this.getAttribute('href').split('#')[1];
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({ 
                        behavior: 'smooth' 
                    });
                }
            }
        });
    });

    // Form Validation (for contact form)
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            let isValid = true;
            const inputs = this.querySelectorAll('input, textarea');
            
            inputs.forEach(input => {
                if (input.hasAttribute('required') && !input.value.trim()) {
                    isValid = false;
                    input.classList.add('error');
                } else {
                    input.classList.remove('error');
                }
            });

            // Email validation
            const emailInput = this.querySelector('input[type="email"]');
            if (emailInput) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailInput.value)) {
                    isValid = false;
                    emailInput.classList.add('error');
                }
            }

            if (!isValid) {
                e.preventDefault();
                alert('Please fill out all required fields correctly.');
            }
        });
    }

    // Product Hover Effects (optional)
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        card.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.05)';
        });

        card.addEventListener('mouseout', function() {
            this.style.transform = 'scale(1)';
        });
    });
});