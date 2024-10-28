<?php
include 'includes/db.php';

// Get the product ID from the URL
$product_id = isset($_GET['id']) ? $_GET['id'] : 0;

// Fetch product details
$sql = "SELECT * FROM products WHERE id = $product_id";
$result = $shop_conn->query($sql);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    echo "Product not found.";
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

        .product-details-container {
            display: flex;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .main-image {
            width: 300px;
            border-radius: 8px 0 0 8px;
            object-fit: cover;
        }

        .product-details {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-details h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
            border-bottom: 1px solid #eaeaea;
            padding-bottom: 10px;
        }

        .product-details p {
            margin: 10px 0;
            font-size: 16px;
            line-height: 1.5;
            color: #666;
        }

        .price {
            font-weight: bold;
            color: #28a745;
            font-size: 20px;
            margin: 10px 0;
        }

        .add-to-cart {
            padding: 12px 24px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .add-to-cart:hover {
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
<div class="product-details-container">
    <img id="main-product-image" class="main-image" src="<?php echo $product['image_url']; ?>" alt="Main Product Image">

    <div class="product-details">
        <!-- Product Name -->
        <h2><?php echo $product['product_name']; ?></h2>
        
        <!-- Price -->
        <p class="price">Price: $<?php echo $product['price']; ?></p>
        
        <!-- Product Description -->
        <p><?php echo $product['description']; ?></p>

        <!-- Add to Cart Button -->
        <form method="POST" action="add_to_cart.php">
            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
            <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
    </div>
</div>

</body>
</html>
