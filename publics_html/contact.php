<?php 
$pageTitle = "Contact Us";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Banner -->
<section class="hero-slider">
    <div class="slider">
        <!-- Slide 1 -->
        <div class="slide" style="--bg-image: url('../images/products/product13.jpg')">
            <div class="overlay gradient-overlay"></div>
            <div class="hero-content animate-fade-in">
                 <span class="hero-label">Get In Touch</span>
                 <h1 class="hero-title">Contact Us</h1>
                 <p class="hero-subtitle">We're here to help with your security needs</p>
                 <div class="cta-group">
                     <a href="#contact-form" class="cta-button primary">Send Message</a>
                     <a href="tel:1234567890" class="cta-button secondary">Call Now</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide" style="--bg-image: url('../images/products/product14.jpg')">
            <div class="overlay gradient-overlay"></div>
            <div class="hero-content animate-fade-in">
                 <span class="hero-label">Locations</span>
                <h1 class="hero-title">Visit Us</h1>
                <p class="hero-subtitle">Find our nearest office to you</p>
                <div class="cta-group">
                <a href="#locations" class="cta-button primary">Our Locations</a>
                <a href="#schedule" class="cta-button secondary">Book Meeting</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <div class="slider-navigation">
        <button class="prev" aria-label="Previous Slide">
            <svg viewBox="0 0 24 24" width="24" height="24">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
            </svg>
        </button>
        <div class="slide-indicators">
            <span class="indicator active"></span>
            <span class="indicator"></span>
        </div>
        <button class="next" aria-label="Next Slide">
            <svg viewBox="0 0 24 24" width="24" height="24">
                <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/>
            </svg>
        </button>
    </div>
</section>


    <section class="contact-content">
        <div class="contact-grid">
            <div class="contact-info">
                <h2>Contact Information</h2>
                <div class="info-items">
                    <div class="info-item">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
                        </svg>
                        <div>
                            <h3 id="locations">Location</h3>
                            <p>Near Police Depot, Tesano City, TC 12345</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        <div>
                            <h3>Email</h3>
                            <p>info@automatic-homes.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <div>
                            <h3>Phone</h3>
                            <p>+(233)54 2703000</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form" id="schedule">
                <h2>Send us a Message</h2>
                <form id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" required>
                        <label for="name">Full Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-group">
                        <select id="service" name="service" required>
                            <option value="">Select Service</option>
                            <option value="automation">Home Automation</option>
                            <option value="security">Security Systems</option>
                            <option value="monitoring">24/7 Monitoring</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" required></textarea>
                        <label for="message">Your Message</label>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
