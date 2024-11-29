<?php 
$pageTitle = "Our Services";
include './includes/header.php'; 
include './includes/navbar.php'; 
?>

<main class="services-page">
    <!-- Hero Banner -->
    <section class="services-hero">
        <div class="hero-content">
            <h1>Smart Home Services</h1>
            <p>Experience the future of home automation with our comprehensive solutions</p>
        </div>
    </section>

    <!-- Main Services Section -->
    <section class="services-overview">
        <div class="section-header">
            <h2>Our Solutions</h2>
            <p>Discover how we can transform your living space</p>
        </div>

        <div class="services-grid">
            <!-- Home Automation -->
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
                        <li>Custom Scene Creation</li>
                        <li>Mobile App Control</li>
                    </ul>
                    <a href="contact.php" class="service-link">Get Started</a>
                </div>
            </div>

            <!-- Security Systems -->
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
                        <li>Motion Detection</li>
                        <li>Emergency Response</li>
                    </ul>
                    <a href="contact.php" class="service-link">Learn More</a>
                </div>
            </div>

            <!-- Smart Integration -->
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
                        <li>Cross-platform Support</li>
                        <li>API Integration</li>
                    </ul>
                    <a href="contact.php" class="service-link">Discover More</a>
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
