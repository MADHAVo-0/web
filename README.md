important sql codes for this shopease project 

sql codes to create two imp tables products in users under databases shopease_db and credentials respectivly 


CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255),
    category VARCHAR(255),
    price DECIMAL(10, 2),
    image_url VARCHAR(255),
    description TEXT
);



CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255)
);



code to insert images in products


INSERT INTO products (product_name, category, price, image_url, description) VALUES
('Smartphone', 'Electronics', 699.99, 'images/image-def.webp', 'High-end smartphone with great features'),
('Laptop', 'Electronics', 1099.99, 'images/image-def.webp', 'Lightweight laptop with powerful specs'),
('Headphones', 'Electronics', 199.99, 'images/image-def.webp', 'Noise-cancelling over-ear headphones'),
('Smartwatch', 'Electronics', 149.99, 'images/image-def.webp', 'Waterproof smartwatch with GPS'),
('Tablet', 'Electronics', 349.99, 'images/image-def.webp', 'High-resolution screen tablet'),

('T-shirt', 'Clothing', 19.99, 'images/image-def.webp', 'Comfortable cotton t-shirt'),
('Jeans', 'Clothing', 49.99, 'images/image-def.webp', 'Denim jeans with a slim fit'),
('Jacket', 'Clothing', 129.99, 'images/image-def.webp', 'Waterproof winter jacket'),
('Sneakers', 'Clothing', 79.99, 'images/image-def.webp', 'Sporty sneakers for everyday wear'),
('Dress', 'Clothing', 99.99, 'images/image-def.webp', 'Elegant evening dress'),

('Sunglasses', 'Accessories', 29.99, 'images/image-def.webp', 'Polarized UV protection sunglasses'),
('Watch', 'Accessories', 249.99, 'images/image-def.webp', 'Luxury watch with leather strap'),
('Necklace', 'Accessories', 59.99, 'images/image-def.webp', 'Gold-plated necklace with pendant'),
('Belt', 'Accessories', 34.99, 'images/image-def.webp', 'Leather belt with metal buckle'),
('Backpack', 'Accessories', 79.99, 'images/image-def.webp', 'Waterproof travel backpack'),

('Smart TV', 'Electronics', 499.99, 'images/image-def.webp', '4K Ultra HD Smart TV'),
('Bluetooth Speaker', 'Electronics', 89.99, 'images/image-def.webp', 'Portable Bluetooth speaker'),
('Camera', 'Electronics', 599.99, 'images/image-def.webp', 'Digital camera with 24MP resolution'),
('Gaming Console', 'Electronics', 399.99, 'images/image-def.webp', 'Next-gen gaming console'),
('Fitness Tracker', 'Electronics', 99.99, 'images/image-def.webp', 'Fitness tracker with heart rate monitor'),

('Sweater', 'Clothing', 39.99, 'images/image-def.webp', 'Wool sweater for cold weather'),
('Blazer', 'Clothing', 149.99, 'images/image-def.webp', 'Formal blazer for business occasions'),
('Shorts', 'Clothing', 24.99, 'images/image-def.webp', 'Comfortable shorts for summer'),
('Socks', 'Clothing', 12.99, 'images/image-def.webp', 'Pack of 5 cotton socks'),
('Hat', 'Clothing', 19.99, 'images/image-def.webp', 'Stylish wide-brim hat'),

('Wallet', 'Accessories', 49.99, 'images/image-def.webp', 'Leather wallet with RFID protection'),
('Earrings', 'Accessories', 24.99, 'images/image-def.webp', 'Sterling silver earrings'),
('Bracelet', 'Accessories', 79.99, 'images/image-def.webp', 'Gold-plated bracelet'),
('Scarf', 'Accessories', 29.99, 'images/image-def.webp', 'Wool scarf for winter'),
('Handbag', 'Accessories', 99.99, 'images/image-def.webp', 'Leather handbag with adjustable strap'),

('Microwave', 'Electronics', 89.99, 'images/image-def.webp', '700W microwave with digital controls'),
('Blender', 'Electronics', 59.99, 'images/image-def.webp', 'High-speed blender with multiple settings'),
('Vacuum Cleaner', 'Electronics', 129.99, 'images/image-def.webp', 'Bagless vacuum cleaner'),
('Air Purifier', 'Electronics', 149.99, 'images/image-def.webp', 'Air purifier with HEPA filter'),
('Coffee Maker', 'Electronics', 119.99, 'images/image-def.webp', 'Automatic coffee maker with grinder'),

('Running Shoes', 'Clothing', 69.99, 'images/image-def.webp', 'Lightweight running shoes'),
('Raincoat', 'Clothing', 59.99, 'images/image-def.webp', 'Waterproof raincoat with hood'),
('Gloves', 'Clothing', 14.99, 'images/image-def.webp', 'Thermal gloves for winter'),
('Swimsuit', 'Clothing', 29.99, 'images/image-def.webp', 'One-piece swimsuit for women'),
('Flip Flops', 'Clothing', 14.99, 'images/image-def.webp', 'Beach flip flops');
