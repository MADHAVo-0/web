<?php
include 'includes/db.php';
$search_query = "";
$category_filter = "";

if (isset($_GET['search'])) {
    $search_query = $_GET['search'];
}

if (isset($_GET['category'])) {
    $category_filter = $_GET['category'];
}

$sql = "SELECT * FROM products WHERE 1";

if ($search_query) {
    $sql .= " AND product_name LIKE '%$search_query%'";
}

if ($category_filter) {
    $sql .= " AND category = '$category_filter'";
}

$result = $shop_conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>ShopEase</h1>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="account-cart">
        <a href="cart.php">Cart</a>
        <a href="account.php">Logout</a>
    </div>
</header>
<div class="products">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product'>";
            // Make the image clickable to open product details
            echo "<a href='product_details.php?id=" . $row["id"] . "'>";
            echo "<img src='" . $row["image_url"] . "' alt='Product Image'>";
            echo "</a>";
            echo "<h3>" . $row["product_name"] . "</h3>";
            echo "<p>Price: $" . $row["price"] . "</p>";
            echo "<a href='product_details.php?id=" . $row["id"] . "'>View Details</a>";
            echo "</div>";
        }
    } else {
        echo "No products found";
    }
    ?>
</div>
</body>
</html>