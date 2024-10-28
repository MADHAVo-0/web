<?php
session_start();
include 'includes/db.php';

// Check if the cart exists in the session
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header('Location: cart.php'); // Redirect to cart if empty
    exit;
}

// Initialize variables
$address = '';
$payment_method = '';
$message = '';

// Handle form submission for checkout
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = $_POST['address'] ?? '';
    $payment_method = $_POST['payment_method'] ?? '';
    
    // Validate address and payment method
    if (empty($address) || empty($payment_method)) {
        $message = "Please fill in all fields.";
    } else {
        // Here you would typically process the order, save it to the database, etc.
        // For demonstration, let's assume the order is successfully placed.
        // Clear the cart
        $_SESSION['cart'] = [];
        
        // Redirect to the order tracking page
        header('Location: order_tracking.php');
        exit;
    }
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

        .checkout-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }

        h2 {
            margin: 0 0 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .error-message {
            color: #dc3545;
            margin-bottom: 15px;
        }

        .proceed-button, .cancel-button {
            padding: 12px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .proceed-button:hover {
            background-color: #218838;
        }

        .cancel-button {
            background-color: #dc3545;
        }

        .cancel-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<div class="checkout-container">
    <h2>Checkout</h2>
    
    <?php if ($message): ?>
        <p class="error-message"><?php echo $message; ?></p>
    <?php endif; ?>
    
    <form method="POST" action="">
        <div class="form-group">
            <label for="address">Shipping Address:</label>
            <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($address); ?>" required>
        </div>

        <div class="form-group">
            <label for="payment_method">Payment Method:</label>
            <select id="payment_method" name="payment_method" required>
                <option value="">Select Payment Method</option>
                <option value="card">Credit/Debit Card</option>
                <option value="netbanking">Net Banking</option>
                <option value="upi">UPI</option>
                <option value="cod">Cash on Delivery</option>
            </select>
        </div>

        <button type="submit" class="proceed-button">Proceed</button>
        <button type="button" class="cancel-button" onclick="window.location.href='cart.php';">Cancel Order</button>
    </form>
</div>

</body>
</html>
