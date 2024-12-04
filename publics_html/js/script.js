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


 // Optional: Add some interactive features
 const inputs = document.querySelectorAll('.input-field');
 inputs.forEach(input => {
     input.addEventListener('focus', function() {
         this.parentElement.classList.add('focused');
     });
     input.addEventListener('blur', function() {
         this.parentElement.classList.remove('focused');
     });
 });



 document.addEventListener('DOMContentLoaded', function() {
    const table = document.querySelector('.products-table');
    const headers = table.querySelectorAll('th');
    const searchContainer = document.createElement('div');
    
    // Search input with icon
    searchContainer.classList.add('search-container');
    searchContainer.innerHTML = `
        <input type="text" class="search-input" placeholder="Search products...">
        <span class="search-icon">🔍</span>
    `;
    table.parentNode.insertBefore(searchContainer, table);

    const searchInput = searchContainer.querySelector('.search-input');

    // Advanced table sorting
    headers.forEach((header, index) => {
        header.style.cursor = 'pointer';
        header.setAttribute('title', 'Click to sort');
        
        const sortIndicator = document.createElement('span');
        sortIndicator.classList.add('sort-indicator');
        header.appendChild(sortIndicator);

        header.addEventListener('click', () => {
            sortTable(table, index);
            updateSortIndicators(headers, index);
        });
    });

    function sortTable(table, columnIndex) {
        const tbody = table.querySelector('tbody');
        const rows = Array.from(tbody.querySelectorAll('tr'));
        
        const sortedRows = rows.sort((a, b) => {
            const aColText = a.querySelector(`td:nth-child(${columnIndex + 1})`).textContent.trim();
            const bColText = b.querySelector(`td:nth-child(${columnIndex + 1})`).textContent.trim();
            
            // Numeric sorting for price and ID
            if (!isNaN(aColText.replace('$', '')) && !isNaN(bColText.replace('$', ''))) {
                return parseFloat(aColText.replace('$', '')) - parseFloat(bColText.replace('$', ''));
            }
            
            // String comparison for text columns
            return aColText.localeCompare(bColText);
        });

        tbody.innerHTML = '';
        sortedRows.forEach(row => tbody.appendChild(row));
    }

    function updateSortIndicators(headers, activeIndex) {
        headers.forEach((header, index) => {
            const indicator = header.querySelector('.sort-indicator');
            if (index === activeIndex) {
                indicator.textContent = '▼';
            } else {
                indicator.textContent = '';
            }
        });
    }

    // Advanced search functionality
    searchInput.addEventListener('keyup', function() {
        const filter = this.value.toLowerCase();
        const rows = table.querySelectorAll('tbody tr');
        
        let visibleCount = 0;
        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            const isVisible = Array.from(cells).some(cell => 
                cell.textContent.toLowerCase().includes(filter)
            );
            
            row.style.display = isVisible ? '' : 'none';
            if (isVisible) visibleCount++;
        });

        // Optional: Show/hide message if no results
        updateNoResultsMessage(table, visibleCount);
    });

    function updateNoResultsMessage(table, visibleCount) {
        let noResultsRow = table.querySelector('.no-results');
        
        if (visibleCount === 0) {
            if (!noResultsRow) {
                noResultsRow = document.createElement('tr');
                noResultsRow.classList.add('no-results');
                const colspan = table.querySelectorAll('th').length;
                noResultsRow.innerHTML = `<td colspan="${colspan}" style="text-align: center; color: #888;">No products found</td>`;
                table.querySelector('tbody').appendChild(noResultsRow);
            }
        } else if (noResultsRow) {
            noResultsRow.remove();
        }
    }

    // Confirmation for delete actions
    table.addEventListener('click', function(event) {
        const deleteLink = event.target.closest('.delete-btn');
        if (deleteLink) {
            if (!confirm('Are you sure you want to delete this product?')) {
                event.preventDefault();
            }
        }
    });

    // Optional: Responsive table scroll on smaller screens
    if (window.innerWidth < 768) {
        table.parentElement.style.overflowX = 'auto';
    }
});
