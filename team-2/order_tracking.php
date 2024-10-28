<?php
session_start();
// You can set dummy values for demonstration
$order_status = "Processing"; // Possible statuses: Processing, Shipped, Out for Delivery, Delivered
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

        .tracking-container {
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

        .tracking-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .tracking-step {
            position: relative;
            flex: 1;
            text-align: center;
        }

        .tracking-step::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 50%;
            width: 50%;
            height: 4px;
            background-color: #ddd;
            z-index: 0;
        }

        .tracking-step.completed::before {
            background-color: #28a745; /* Green for completed */
        }

        .tracking-circle {
            width: 25px;
            height: 25px;
            background-color: #ddd;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            z-index: 1;
        }

        .tracking-circle.completed {
            background-color: #28a745; /* Green for completed */
        }

        .tracking-status {
            margin-top: 5px;
            font-size: 14px;
        }

        .action-buttons {
            margin-top: 20px;
        }

        .review-button {
            padding: 12px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .review-button:hover {
            background-color: #0056b3;
        }

        .cancel-button {
            padding: 12px 20px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 10px;
        }

        .cancel-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<div class="tracking-container">
    <h2>Order Tracking</h2>
    
    <div class="tracking-bar">
        <div class="tracking-step <?php echo $order_status == 'Processing' ? 'completed' : ''; ?>">
            <div class="tracking-circle <?php echo $order_status == 'Processing' ? 'completed' : ''; ?>"></div>
            <div class="tracking-status">Processing</div>
        </div>
        <div class="tracking-step <?php echo $order_status == 'Shipped' ? 'completed' : ''; ?>">
            <div class="tracking-circle <?php echo $order_status == 'Shipped' ? 'completed' : ''; ?>"></div>
            <div class="tracking-status">Shipped</div>
        </div>
        <div class="tracking-step <?php echo $order_status == 'Out for Delivery' ? 'completed' : ''; ?>">
            <div class="tracking-circle <?php echo $order_status == 'Out for Delivery' ? 'completed' : ''; ?>"></div>
            <div class="tracking-status">Out for Delivery</div>
        </div>
        <div class="tracking-step <?php echo $order_status == 'Delivered' ? 'completed' : ''; ?>">
            <div class="tracking-circle <?php echo $order_status == 'Delivered' ? 'completed' : ''; ?>"></div>
            <div class="tracking-status">Delivered</div>
        </div>
    </div>

    <div class="action-buttons">
        <button class="review-button">Leave a Review</button>
        <button class="cancel-button" onclick="window.location.href='cart.php';">Cancel Order</button>
    </div>
</div>

</body>
</html>
