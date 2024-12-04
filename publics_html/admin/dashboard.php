<?php /*
session_start();
// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
   
}

include '../includes/db_connection.php';

// Fetch products
$stmt = $pdo->query("SELECT * FROM products ORDER BY created_at DESC");
$products = $stmt->fetchAll();
*/?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/png" href="/publics_html/images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="shortcut icon" href="/publics_html/images/favicon/favicon.ico" />
    <link rel="icon" type="image/svg+xml" href="/publics_html/images/favicon/favicon.svg" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest" href="/publics_html/images/favicon/site.webmanifest" />
    <link rel="apple-touch-icon" sizes="180x180" href="/publics_html/images/favicon/apple-touch-icon.png" />
</head>
<style>
    body {
    line-height: 1.6;
    background-color: var(--background-light);
    color: var(--text-dark);
}
</style>
<body>
<nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-logo">
                <img src="../images/Automatic Homes Green Logo update.png" alt="Automatic Homes" class="logo">
            </div>

            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <ul class="navbar-links">
                <li><a href="../index.php" class="nav-link">Home</a></li>
                <li><a href="../products.php" class="nav-link">Products</a></li>
                <li><a href="../admin/login.php" class="nav-link">Login</a></li>
            </ul>
        </div>
    </nav><br><br><br>

    <div class="dashboard">
        <h1>Welcome, <?//php echo $_SESSION['username']; ?></h1>
        
        <div class="dashboard-actions">
            <a href="add-product.php" class="btn">Add New Product</a>
        </div>

        <table class="products-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?/*php foreach($products as $product): */?>
                <!--<tr>
                    <td><?php // echo $product['id']; ?></td>
                    <td><?php // echo $product['name']; ?></td>
                    <td><?php // echo $product['category']; ?></td>
                    <td>$<?php // echo $product['price']; ?></td>
                    <td><?php // echo $product['status']; ?></td>
                    <td>
                        <a href="edit-product.php?id=<?php // echo $product['id']; ?>">Edit</a>
                        <a href="delete-product.php?id=<?php //  echo $product['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>-->
                <?php // endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
<script src="../js/script.js"></script>
</html>