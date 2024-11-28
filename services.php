<?php 
$pageTitle = "Our Services";
include 'includes/header.php'; 
?>

<?php include 'includes/navbar.php'; ?>

<main class="services-page">
    <section class="page-header">
        <h1>Home Automation & Security Services</h1>
        <p>Comprehensive solutions for modern living</p>
    </section>

    <section class="services-detailed">
        <?php
        $services = [
            [
                'title' => 'Home Automation',
                'description' => 'Control lighting, temperature, security, and more with a single app',
                'icon' => 'home-automation-icon.png'
            ],
            [
                'title' => 'Security System Installation',
                'description' => 'Professional installation of cutting-edge security technologies',
                'icon' => 'installation-icon.png'
            ],
            [
                'title' => ' 24/7 Monitoring',
                'description' => 'Continuous surveillance and instant alert systems',
                'icon' => 'monitoring-icon.png'
            ]
        ];

        foreach ($services as $service) {
            echo "<div class='service-item'>";
            echo "<img src='images/{$service['icon']}' alt='{$service['title']}'>";
            echo "<h3>{$service['title']}</h3>";
            echo "<p>{$service['description']}</p>";
            echo "</div>";
        }
        ?>
    </section>
</main>

<?php include 'includes/footer.php'; ?>