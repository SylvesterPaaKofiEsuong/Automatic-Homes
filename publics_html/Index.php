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
                    <a href="#" class="cta-button primary">Watch Demo</a>
                    <a href="services.php" class="cta-button secondary">Learn More</a>
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
                    <a href="products.php" class="cta-button secondary">View Gallery</a>
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
                <img src="/publics_html/images/products/product6.jpg" alt="Smart Security Camera">
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
                  <summary> </summary>
                  <p>Epcot is a theme park at Walt Disney World Resort featuring 
                    exciting attractions, international pavilions, award-winning 
                    fireworks and seasonal special events.</p>
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
                  <summary></summary>
                  <p>Epcot is a theme park at Walt Disney World Resort featuring 
                    exciting attractions, international pavilions, award-winning fireworks 
                    and seasonal special events.</p>
                </details>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="/publics_html/images/products/product4.jpg" alt="Smart Home Hub">
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
                  <summary></summary>
                  <p>Epcot is a theme park at Walt Disney World Resort featuring 
                    exciting attractions, international pavilions, award-winning fireworks
                     and seasonal special events.</p>
                </details>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- Testimonials Section -->
 <section class="py-20 px-4 testimonial-section">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-[var(--text-dark)] mb-4">
                    Customer Success Stories
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Discover how our innovative smart home solutions have transformed living experiences across diverse lifestyles.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-10">
                <!-- Testimonial Card 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg relative testimonial-card overflow-hidden">
                    <div class="flex items-center mb-6">
                        <img src="/publics_html/images/products/product18.jpg" alt="Client" class="w-16 h-16 rounded-full mr-5 client-avatar border-4 border-[var(--secondary-color)]">
                        <div>
                            <h4 class="font-bold text-[var(--text-dark)] text-xl">John Thompson</h4>
                            <p class="text-sm text-gray-500">Digital Marketing Lead</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4 relative z-10">
                        Our smart home system has redefined convenience. The seamless automation allows me to control every aspect of my home with just a few taps, making daily life incredibly efficient.
                    </p>
                    <div class="flex items-center text-[var(--secondary-color)] space-x-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-sm text-gray-500 ml-2">(4.5/5)</span>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg relative testimonial-card overflow-hidden">
                    <div class="flex items-center mb-6">
                        <img src="/publics_html/images/products/product17.jpg" alt="Client" class="w-16 h-16 rounded-full mr-5 client-avatar border-4 border-[var(--secondary-color)]">
                        <div>
                            <h4 class="font-bold text-[var(--text-dark)] text-xl">David Kim</h4>
                            <p class="text-sm text-gray-500">Innovation Consultant</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4 relative z-10">
                        As a tech enthusiast, I'm impressed by the robust integration and intelligent design. The system adapts to my lifestyle, providing intuitive controls and energy-saving insights.
                    </p>
                    <div class="flex items-center text-[var(--secondary-color)] space-x-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="text-sm text-gray-500 ml-2">(5/5)</span>
                    </div>
                </div>

                <!-- Testimonial Card 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg relative testimonial-card overflow-hidden">
                    <div class="flex items-center mb-6">
                        <img src="/publics_html/images/products/product19.jpg" alt="Client" class="w-16 h-16 rounded-full mr-5 client-avatar border-4 border-[var(--secondary-color)]">
                        <div>
                            <h4 class="font-bold text-[var(--text-dark)] text-xl">Eli Rodriguez</h4>
                            <p class="text-sm text-gray-500">Sustainability Expert</p>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4 relative z-10">
                        Initially skeptical about home automation, I'm now a complete convert. The system's energy management and security features have exceeded my expectations dramatically.
                    </p>
                    <div class="flex items-center text-[var(--secondary-color)] space-x-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-sm text-gray-500 ml-2">(4.5/5)</span>
                    </div>
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
    </section><br><br>

    <section class="newsletter-container py-20 px-4">
        <div class="container mx-auto max-w-4xl relative z-10">
            <div class="form-container rounded-2xl shadow-2xl overflow-hidden">
                <div class="grid md:grid-cols-2">
                    <!-- Newsletter Content -->
                    <div class="p-12 bg-[var(--background-light)] flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-[var(--text-dark)] mb-6 animate__animated animate__fadeInLeft">
                            Stay Ahead of Smart Home Innovation
                        </h2>
                        <p class="text-gray-600 mb-8 animate__animated animate__fadeInLeft animate__delay-1s">
                            Unlock exclusive insights, cutting-edge technology updates, and personalized recommendations for your smart home journey.
                        </p>
                        
                        <div class="space-y-4">
                            <div class="flex items-center animate__animated animate__fadeInLeft animate__delay-2s">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[var(--secondary-color)] mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-gray-700">Personalized Tech Insights</span>
                            </div>
                            <div class="flex items-center animate__animated animate__fadeInLeft animate__delay-250ms">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[var(--secondary-color)] mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-gray-700">Exclusive Smart Home Offers</span>
                            </div>
                            <div class="flex items-center animate__animated animate__fadeInLeft animate__delay-500ms">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[var(--secondary-color)] mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-gray-700">Monthly Technology Digest</span>
                            </div>
                        </div>
                    </div>

                    <!-- Newsletter Form -->
                    <div class="p-12 flex items-center justify-center">
                        <form id="newsletterForm" class="w-full">
                            <div class="input-group mb-6">
                                <input 
                                    type="text" 
                                    id="name"
                                    placeholder=" " 
                                    required 
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none peer"
                                >
                                <label for="name" class="text-xs">Full Name</label>
                            </div>
                            <div class="input-group mb-6">
                                <input 
                                    type="email" 
                                    id="email"
                                    placeholder=" " 
                                    required 
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none peer"
                                >
                                <label for="email" class="text-xs">Email Address</label>
                            </div>
                            <button 
                                type="submit" 
                                class="submit-btn w-full text-white py-3 rounded-lg hover:bg-green-700 transition-all duration-300"
                            >
                                Subscribe Now
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php include './includes/footer.php'; ?>