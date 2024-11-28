<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include '../includes/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $status = $_POST['status'];

    // File upload handling
    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $upload_dir = '../images/products/';
        $filename = uniqid() . '_' . basename($_FILES['image']['name']);
        $upload_path = $upload_dir . $filename;
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_path)) {
            $image_path = 'images/products/' . $filename;
        }
    }

    $stmt = $pdo->prepare("INSERT INTO products (name, description, price, category, image_path, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $description, $price, $category, $image_path, $status]);

    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="add-product-form">
        <h1>Add New Product</h1>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Product Name" required>
            <textarea name="description" placeholder="Product Description" required></textarea>
            <input type="number" name="price" step="0.01" placeholder="Price" required>
            <select name="category">
                <option value="home-security">Home Security</option>
                <option value="home-automation">Home Automation</option>
            </select>
            <input type="file" name="image">
            <select name="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            <button type="submit">Add Product</button>
        </form>
    </div>
</body>
</html>