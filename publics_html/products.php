<?php 
$pageTitle = "Our Products";
include 'includes/header.php'; 
?>

<?php include 'includes/navbar.php'; ?>


<section class="hero-slider">
    <div class="slider">
        <!-- Slide 1 -->
        <div class="slide" style="--bg-image: url('../images/products/product4.jpg')">
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
        <div class="slide" style="--bg-image: url('../images/products/product3.jpg')">
            <div class="overlay gradient-overlay"></div>
            <div class="hero-content animate-fade-in">
                <span class="hero-label">New Release</span>
                <h1 class="hero-title">Intelligent Monitoring</h1>
                <p class="hero-subtitle">24/7 smart surveillance with real-time notifications</p>
                <div class="cta-group">
                    <a href="#" class="cta-button primary">Watch Demo</a>
                    <a href="#" class="cta-button secondary">Learn More</a>
                </div>
            </div>
        </div>>
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


<main class="products-page">
        <section class="featured-products">
            <div class="section-header">
                <h2>Smart Home Security Solutions</h2>
                <p>Innovative technology designed to protect and simplify your life. 
                    Experience the future of home security with intelligent, interconnected devices.</p>
            </div>
            
            <div class="product-grid">
        <div class="product-card">
            <div class="product-image">
                <img src="/publics_html/images/products/product2.jpg" alt="Smart Security Camera">
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
                    <details>
                    <summary class="learn-more-btn">Learn More</summary>
                    <p>The ultimate home automation centerpiece. 
                         Seamlessly integrate devices from different ecosystems, 
                        create custom automation scenes, and gain unprecedented insights into your home's energy consumption. 
                         Control everything with simple voice commands or through our intuitive mobile app.</p>
                    </details>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="/publics_html/images/products/product5.jpg" alt="Smart Door Lock">
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
                    <details>
                    <summary class="learn-more-btn">Learn More</summary>
                    <p>The ultimate home automation centerpiece. 
                         Seamlessly integrate devices from different ecosystems, 
                        create custom automation scenes, and gain unprecedented insights into your home's energy consumption. 
                         Control everything with simple voice commands or through our intuitive mobile app.</p>
                    </details>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="/publics_html/images/products/product-5.jpeg" alt="Smart Home Hub">
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
                    <details>
                    <summary class="learn-more-btn">Learn More</summary>
                    <p>The ultimate home automation centerpiece. 
                         Seamlessly integrate devices from different ecosystems, 
                        create custom automation scenes, and gain unprecedented insights into your home's energy consumption. 
                         Control everything with simple voice commands or through our intuitive mobile app.</p>
                    </details>
                </div>
            </div>
        </div>
    </div>
</section>
    </main>

<?php include 'includes/footer.php'; ?>