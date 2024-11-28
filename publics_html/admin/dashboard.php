<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include '../includes/db_connection.php';

// Fetch products
$stmt = $pdo->query("SELECT * FROM products ORDER BY created_at DESC");
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="dashboard">
        <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
        
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
                <?php foreach($products as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['category']; ?></td>
                    <td>$<?php echo $product['price']; ?></td>
                    <td><?php echo $product['status']; ?></td>
                    <td>
                        <a href="edit-product.php?id=<?php echo $product['id']; ?>">Edit</a>
                        <a href="delete-product.php?id=<?php echo $product['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>