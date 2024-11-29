<?php 
$pageTitle = "About Us";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="about-page">
    <!-- Hero Section -->
    <section class="about-hero">
      <div class="slide" style="--bg-image: url('../images/about/team.jpg')">
    <div class="overlay gradient-overlay"></div>
    <div class="hero-content animate-fade-in">
        <span class="hero-label">Our Story</span>
        <h1 class="hero-title">Who We Are</h1>
        <p class="hero-subtitle">Leaders in home automation and security solutions</p>
        <div class="cta-group">
            <a href="#team" class="cta-button primary">Meet Our Team</a>
            <a href="contact.php" class="cta-button secondary">Contact Us</a>
        </div>
    </div>
</div>

<div class="slide" style="--bg-image: url('../images/about/expertise.jpg')">
    <div class="overlay gradient-overlay"></div>
    <div class="hero-content animate-fade-in">
        <span class="hero-label">Experience</span>
        <h1 class="hero-title">Our Expertise</h1>
        <p class="hero-subtitle">Decades of experience in smart home security</p>
        <div class="cta-group">
            <a href="#history" class="cta-button primary">Our History</a>
            <a href="services.php" class="cta-button secondary">Our Services</a>
        </div>
    </div>
</div>
  
    </section>

    <!-- Company Story -->
    <section class="company-story">
        <div class="story-content">
            <div class="story-text">
                <h2>Our Journey</h2>
                <p>Founded with a vision to make smart home technology accessible to everyone, Automatic-Homes has grown from a small local business to a leading provider of home automation solutions.</p>
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">Homes Automated</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">13+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">98%</span>
                        <span class="stat-label">Client Satisfaction</span>
                    </div>
                </div>
            </div>
            <div class="story-image">
                <img src="assets/images/about/team.jpg" alt="Our Team">
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <h2>Meet Our Experts</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="assets/images/team/member1.jpg" alt="Team Member">
                <h3>John Smith</h3>
                <p>Technical Director</p>
            </div>
            <div class="team-member">
                <img src="assets/images/team/member2.jpg" alt="Team Member">
                <h3>Sarah Johnson</h3>
                <p>Installation Manager</p>
            </div>
            <div class="team-member">
                <img src="assets/images/team/member3.jpg" alt="Team Member">
                <h3>Mike Wilson</h3>
                <p>Security Specialist</p>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
