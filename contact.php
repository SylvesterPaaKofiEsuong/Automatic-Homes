<?php 
$pageTitle = "Contact Us";
include 'includes/header.php'; 
?>

<?php include 'includes/navbar.php'; ?>

<main class="contact-page">
    <section class="contact-section">
        <h1>Get in Touch</h1>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Contact Details</h3>
                <p>Phone: (555) 123-4567</p>
                <p>Email: info@automatichomes.com</p>
                <p>Address: 123 Security Lane, Tech City, TC 12345</p>
            </div>

            <form class="contact-form" method="POST" action="process-contact.php">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="tel" name="phone" placeholder="Your Phone Number">
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>