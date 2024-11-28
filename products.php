<?php 
$pageTitle = "Our Products";
include 'includes/header.php'; 
?>

<?php include 'includes/navbar.php'; ?>

<main class="products-page">
    <section class="page-header">
        <h1>Our Security Systems</h1>
        <p>Cutting-edge solutions for home and business protection</p>
    </section>

    <section class="product-listing">
        <div class="product-grid">
            <?php 
            // Later, this will be dynamically populated from database
            $products = [
                [
                    'name' => 'Smart Home Security System',
                    'description' => 'Complete home security solution with mobile app integration',
                    'image' => 'security-system-1.jpg',
                    'price' => 'Custom Pricing'
                ],
                [
                    'name' => 'Advanced Motion Sensors',
                    'description' => 'High-precision motion detection for comprehensive protection',
                    'image' => 'motion-sensor.jpg',
                    'price' => 'Custom Pricing'
                ]
                // Add more products
            ];

            foreach ($products as $product) {
                echo "<div class='product-card'>";
                echo "<img src='images/{$product['image']}' alt='{$product['name']}'>";
                echo "<h3>{$product['name']}</h3>";
                echo "<p>{$product['description']}</p>";
                echo "<span class='price'>{$product['price']}</span>";
                echo "<a href='#' class='btn'>Request Quote</a>";
                echo "</div>";
            }
            ?>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>