<?php
session_start();

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Initialize cart if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add product to cart (store product ID)
    $_SESSION['cart'][] = $product_id;

    // Redirect back to the product details page or a cart page
    header('Location: cart.php');
    exit;
}
?>
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