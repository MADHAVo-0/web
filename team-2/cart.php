<?php
session_start();
include 'includes/db.php';

// Initialize cart products array
$cart_products = [];

// Check if the cart exists in the session
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Fetch product details for each product in the cart
    $product_ids = implode(',', $_SESSION['cart']); // Convert array to a comma-separated string
    $sql = "SELECT * FROM products WHERE id IN ($product_ids)";
    $result = $shop_conn->query($sql);

    if ($result->num_rows > 0) {
        // Store product details in the array
        while ($product = $result->fetch_assoc()) {
            $cart_products[] = $product;
        }
    } else {
        $message = "Your cart is empty.";
    }
} else {
    $message = "Your cart is empty.";
}

// Handle product removal
if (isset($_POST['remove_product_id'])) {
    $remove_product_id = $_POST['remove_product_id'];
    // Remove the product ID from the cart
    $_SESSION['cart'] = array_diff($_SESSION['cart'], [$remove_product_id]);
    // Refresh the page to see the updated cart
    header('Location: cart.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .cart-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            margin: 0 0 20px;
            color: #333;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #eaeaea;
        }

        .cart-item img {
            width: 80px;
            border-radius: 4px;
            margin-right: 20px;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-details h3 {
            margin: 0 0 5px;
            font-size: 18px;
        }

        .cart-item-details p {
            margin: 5px 0;
            color: #666;
        }

        .remove-button {
            padding: 5px 10px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .remove-button:hover {
            background-color: #c82333;
        }

        .cart-total {
            margin-top: 20px;
            font-weight: bold;
            font-size: 20px;
        }

        .checkout-button {
            padding: 12px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .checkout-button:hover {
            background-color: #218838;
        }
    </style>
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

<div class="cart-container">
    <h2>Your Shopping Cart</h2>

    <?php if (isset($message)): ?>
        <p><?php echo $message; ?></p>
    <?php else: ?>
        <?php 
        $total_price = 0; // Initialize total price
        foreach ($cart_products as $product): 
            $total_price += $product['price']; // Calculate total price
        ?>
            <div class="cart-item">
                <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['product_name']; ?>">
                <div class="cart-item-details">
                    <h3><?php echo $product['product_name']; ?></h3>
                    <p>Price: $<?php echo $product['price']; ?></p>
                </div>
                
                <!-- Remove Button -->
                <form method="POST" action="">
                    <input type="hidden" name="remove_product_id" value="<?php echo $product['id']; ?>">
                    <button type="submit" class="remove-button">Remove</button>
                </form>
            </div>
        <?php endforeach; ?>
        
        <div class="cart-total">Total: $<?php echo $total_price; ?></div>
        
        <!-- Checkout Button -->
        <form method="POST" action="checkout.php">
            <button type="submit" class="checkout-button">Proceed to Checkout</button>
        </form>
    <?php endif; ?>
</div>

</body>
</html>
