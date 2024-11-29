<?php 
$pageTitle = "Home";
include './includes/header.php'; 
?>



<?php 
include './includes/navbar.php'; 
?>

<main>
<section class="hero-slider">
    <div class="slider">
        <!-- Slide 1 -->
        <div class="slide" style="--bg-image: url('../images/products/product10.jpg')">
            <div class="overlay gradient-overlay"></div>
            <div class="hero-content animate-fade-in">
                <span class="hero-label">Featured</span>
                <h1 class="hero-title">Automatic Home Security </h1>
                <p class="hero-subtitle">Experience next-generation home protection </p>
                <div class="cta-group">
                    <a href="contact.php" class="cta-button primary">Get Started</a>
                    <a href="products.php" class="cta-button secondary">View Products</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide" style="--bg-image: url('../images/products/product5.jpg')">
            <div class="overlay gradient-overlay"></div>
            <div class="hero-content animate-fade-in">
                <span class="hero-label">New Release</span>
                <h1 class="hero-title">Intelligent Monitoring</h1>
                <p class="hero-subtitle">24/7 smart surveillance with real-time notifications</p>
                <div class="cta-group">
                    <a href="demo.php" class="cta-button primary">Watch Demo</a>
                    <a href="features.php" class="cta-button secondary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide" style="--bg-image: url('../images/products/product7.jpg')">
            <div class="overlay gradient-overlay"></div>
            <div class="hero-content animate-fade-in">
                <span class="hero-label">Premium</span>
                <h1 class="hero-title">Advanced Home Control</h1>
                <p class="hero-subtitle">Transform your space with integrated smart home solutions</p>
                <div class="cta-group">
                    <a href="contact.php" class="cta-button primary">Free Consultation</a>
                    <a href="gallery.php" class="cta-button secondary">View Gallery</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Navigation -->
    <div class="slider-navigation">
        <button class="prev" aria-label="Previous Slide">
            <svg viewBox="0 0 24 24" width="24" height="24">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
            </svg>
        </button>
        <div class="slide-indicators">
            <span class="indicator active"></span>
            <span class="indicator"></span>
            <span class="indicator"></span>
        </div>
        <button class="next" aria-label="Next Slide">
            <svg viewBox="0 0 24 24" width="24" height="24">
                <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"/>
            </svg>
        </button>
    </div>
</section>


<section class="featured-products">
    <div class="section-header">
        <h2>Featured Solutions</h2>
        <p>Discover our most popular smart home security products</p>
    </div>
    
    <div class="product-grid">
        <div class="product-card">
            <div class="product-image">
                <img src="../images/products/product4" alt="Smart Security Camera">
                <div class="product-badge">Bestseller</div>
            </div>
            <div class="product-content">
                <h3>AI Security Camera</h3>
                <p>4K Ultra HD • Night Vision • Motion Detection</p>
                <ul class="product-features">
                    <li>Face Recognition</li>
                    <li>Mobile Alerts</li>
                    <li>Cloud Storage</li>
                </ul>
                <div class="product-actions">
                    <a href="products.php" class="btn-primary">View Details</a>
                    <a href="#" class="btn-icon" aria-label="Add to Compare">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M9 1v2h6V1h2v2h4v18H3V3h4V1h2zm11 9H4v9h16v-9zM7 3H5v3h14V3h-2v1h-2V3H9v1H7V3z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="../images/products/product11.jpg" alt="Smart Door Lock">
                <div class="product-badge">New</div>
            </div>
            <div class="product-content">
                <h3>Smart Door Lock Pro</h3>
                <p>Fingerprint • PIN Code • Remote Access</p>
                <ul class="product-features">
                    <li>Biometric Security</li>
                    <li>Auto-Lock</li>
                    <li>Activity Log</li>
                </ul>
                <div class="product-actions">
                    <a href="products.php" class="btn-primary">View Details</a>
                    <a href="#" class="btn-icon" aria-label="Add to Compare">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M9 1v2h6V1h2v2h4v18H3V3h4V1h2zm11 9H4v9h16v-9zM7 3H5v3h14V3h-2v1h-2V3H9v1H7V3z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="../images/products/product0.jpg" alt="Smart Home Hub">
                <div class="product-badge">Popular</div>
            </div>
            <div class="product-content">
                <h3>Smart Home Hub</h3>
                <p>Central Control • Voice Commands • Automation</p>
                <ul class="product-features">
                    <li>Device Integration</li>
                    <li>Scene Control</li>
                    <li>Energy Management</li>
                </ul>
                <div class="product-actions">
                    <a href="products.php" class="btn-primary">View Details</a>
                    <a href="#" class="btn-icon" aria-label="Add to Compare">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M9 1v2h6V1h2v2h4v18H3V3h4V1h2zm11 9H4v9h16v-9zM7 3H5v3h14V3h-2v1h-2V3H9v1H7V3z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-overview">
    <div class="section-header">
        <h2>Smart Home Services</h2>
        <p>Comprehensive solutions for your modern lifestyle</p>
    </div>

    <div class="services-grid">
        <div class="service-item">
            <div class="service-icon">
                <svg width="48" height="48" viewBox="0 0 24 24">
                    <path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/>
                </svg>
            </div>
            <div class="service-content">
                <h3>Home Automation</h3>
                <p>Transform your home with intelligent automation systems that learn and adapt to your lifestyle.</p>
                <ul class="service-features">
                    <li>Smart Lighting Control</li>
                    <li>Climate Automation</li>
                    <li>Voice-Activated Systems</li>
                    <li>Energy Management</li>
                </ul>
                <a href="services.php" class="service-link">Explore Solutions</a>
            </div>
        </div>

        <div class="service-item">
            <div class="service-icon">
                <svg width="48" height="48" viewBox="0 0 24 24">
                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
                </svg>
            </div>
            <div class="service-content">
                <h3>Security Systems</h3>
                <p>Advanced security solutions that protect your home and family around the clock.</p>
                <ul class="service-features">
                    <li>24/7 Monitoring</li>
                    <li>Smart Access Control</li>
                    <li>Mobile Notifications</li>
                    <li>Video Surveillance</li>
                </ul>
                <a href="services.php" class="service-link">Learn More</a>
            </div>
        </div>

        <div class="service-item">
            <div class="service-icon">
                <svg width="48" height="48" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.5 14H8c-1.66 0-3-1.34-3-3s1.34-3 3-3l.14.01C8.58 8.28 10.13 7 12 7c2.21 0 4 1.79 4 4h.5c1.38 0 2.5 1.12 2.5 2.5S17.88 16 16.5 16z"/>
                </svg>
            </div>
            <div class="service-content">
                <h3>Smart Integration</h3>
                <p>Seamlessly connect all your smart devices into one unified ecosystem.</p>
                <ul class="service-features">
                    <li>Device Synchronization</li>
                    <li>Custom Automation</li>
                    <li>Remote Management</li>
                    <li>System Updates</li>
                </ul>
                <a href="services.php" class="service-link">Discover More</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="services-cta">
        <div class="cta-content">
            <h2>Ready to Transform Your Home?</h2>
            <p>Get in touch for a free consultation and personalized solution</p>
            <a href="contact.php" class="cta-button">Schedule Consultation</a>
        </div>
    </section>

</main>

<?php include './includes/footer.php'; ?>