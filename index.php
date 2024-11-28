<?php 
$pageTitle = "Home";
include 'includes/header.php'; 
?>

<?php include 'includes/navbar.php'; ?>

<main>
    <section class="hero">
        <h1>Secure Your Home with Smart Technology</h1>
        <p>Advanced Automatic Home and Security Solutions</p>
        <a href="products.php" class="cta-button">Explore Products</a>
    </section>

    <section class="featured-products">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="product1.jpg" alt="Smart Security System">
                <h3>Smart Security System</h3>
                <p>Advanced home protection</p>
                <a href="products.php" class="btn">Learn More</a>
            </div>
            <!-- More product cards can be added -->
        </div>
    </section>

    <section class="services-overview">
        <h2>Our Services</h2>
        <div class="services-grid">
            <div class="service-item">
                <img src="icon-home-automation.png" alt="Home Automation">
                <h3>Home Automation</h3>
                <p>Control your entire home with smart technology</p>
            </div>
            <div class="service-item">
                <img src="icon-security.png" alt="Security Systems">
                <h3>Security Systems</h3>
                <p>Comprehensive protection for your home</p>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>