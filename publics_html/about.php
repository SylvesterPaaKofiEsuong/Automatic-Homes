<?php 
$pageTitle = "About Us";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="about-page">
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="hero-content">
            <h1>Leading the Future of Smart Homes</h1>
            <p>Transforming houses into intelligent living spaces since 2010</p>
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
