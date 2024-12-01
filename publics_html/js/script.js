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




document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        slides[index].classList.add('active');
        indicators[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    function startSlideShow() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    function resetInterval() {
        clearInterval(slideInterval);
        startSlideShow();
    }

    // Event Listeners
    prevBtn.addEventListener('click', () => {
        prevSlide();
        resetInterval();
    });

    nextBtn.addEventListener('click', () => {
        nextSlide();
        resetInterval();
    });

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
            resetInterval();
        });
    });

    // Initialize slider
    showSlide(currentSlide);
    startSlideShow();

    // Pause slideshow on hover
    const sliderContainer = document.querySelector('.hero-slider');
    sliderContainer.addEventListener('mouseenter', () => clearInterval(slideInterval));
    sliderContainer.addEventListener('mouseleave', startSlideShow);
});




    // Scroll-based navbar transformation
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Performance logging
    const navLoadTime = performance.now();
    console.log(`Navigation loaded in: ${navLoadTime.toFixed(2)}ms`);

    // Active link highlighting
    const currentLocation = window.location.href;
    document.querySelectorAll('.navbar-links a').forEach(link => {
        if (link.href === currentLocation) {
            link.classList.add('active-link');
        }
    });


    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.navbar-links');
    
        // Scroll Effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    
        // Mobile Menu Toggle
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
    
        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!navbar.contains(e.target) && navLinks.classList.contains('active')) {
                menuToggle.classList.remove('active');
                navLinks.classList.remove('active');
            }
        });
    
        // Close mobile menu when link is clicked
        document.querySelectorAll('.navbar-links a').forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    });
    

   // Countup Animation Function
function animateCountup() {
    const statNumbers = document.querySelectorAll('.stat-number');
    
    statNumbers.forEach(element => {
        // Extract the original symbol and number
        const originalText = element.textContent;
        const symbol = originalText.replace(/[0-9]/g, '');
        const target = parseFloat(originalText);
        
        const duration = 2000; // Total animation duration in milliseconds
        const frameDuration = 1000 / 60; // 60 fps
        const totalFrames = Math.round(duration / frameDuration);
        
        let currentFrame = 0;

        function updateNumber() {
            currentFrame++;
            const progress = currentFrame / totalFrames;
            const currentNumber = Math.round(target * progress);
            
            // Display number with original symbol
            element.textContent = `${currentNumber}${symbol}`;
            
            if (currentFrame < totalFrames) {
                requestAnimationFrame(updateNumber);
            } else {
                // Ensure final number is exact with original symbol
                element.textContent = originalText;
            }
        }
        
        // Only start animation when element is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateNumber();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        observer.observe(element);
    });
}

// Run the animation when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', animateCountup);


//Newsletter Form Submission
document.getElementById('newsletterForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    
    // Enhanced email validation
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    
    if (emailRegex.test(email)) {
        // Simulate successful subscription
        alert(`Thank you, ${name}! You've successfully subscribed with ${email}.`);
        this.reset();
    } else {
        alert('Please enter a valid email address.');
    }
});