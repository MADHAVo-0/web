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





SQL code to alter the table content in products table




UPDATE products SET image_url = 'images/smartphone.jpg' WHERE product_name = 'Smartphone';
UPDATE products SET image_url = 'images/laptop.jpg' WHERE product_name = 'Laptop';
UPDATE products SET image_url = 'images/headphon.jpeg' WHERE product_name = 'Headphones';
UPDATE products SET image_url = 'images/smartwatch.jpg' WHERE product_name = 'Smartwatch';
UPDATE products SET image_url = 'images/tab.jpeg' WHERE product_name = 'Tablet';

UPDATE products SET image_url = 'images/tshirts.jpg' WHERE product_name = 'T-shirt';
UPDATE products SET image_url = 'images/jeans.jpg' WHERE product_name = 'Jeans';
UPDATE products SET image_url = 'images/jacket.jpg' WHERE product_name = 'Jacket';
UPDATE products SET image_url = 'images/sneakers.jpeg' WHERE product_name = 'Sneakers';
UPDATE products SET image_url = 'images/dress.jpeg' WHERE product_name = 'Dress';

UPDATE products SET image_url = 'images/sunglasses.jpg' WHERE product_name = 'Sunglasses';
UPDATE products SET image_url = 'images/watch.jpg' WHERE product_name = 'Watch';
UPDATE products SET image_url = 'images/necklace.jpg' WHERE product_name = 'Necklace';
UPDATE products SET image_url = 'images/belt.jpg' WHERE product_name = 'Belt';
UPDATE products SET image_url = 'images/backpack.jpg' WHERE product_name = 'Backpack';

UPDATE products SET image_url = 'images/smarttv.png' WHERE product_name = 'Smart TV';
UPDATE products SET image_url = 'images/speaker.jpg' WHERE product_name = 'Bluetooth Speaker';
UPDATE products SET image_url = 'images/camera.png' WHERE product_name = 'Camera';
UPDATE products SET image_url = 'images/console.webp' WHERE product_name = 'Gaming Console';
UPDATE products SET image_url = 'images/tracker.jpg' WHERE product_name = 'Fitness Tracker';

UPDATE products SET image_url = 'images/image-x.png' WHERE product_name = 'Sweater';
UPDATE products SET image_url = 'images/image-x.png' WHERE product_name = 'Blazer';
UPDATE products SET image_url = 'images/image-x.png' WHERE product_name = 'Shorts';
UPDATE products SET image_url = 'images/image-x.png' WHERE product_name = 'Socks';
UPDATE products SET image_url = 'images/image-x.png' WHERE product_name = 'Hat';

UPDATE products SET image_url = 'images/wallet.jpg' WHERE product_name = 'Wallet';
UPDATE products SET image_url = 'images/ear rings.jpg' WHERE product_name = 'Earrings';
UPDATE products SET image_url = 'images/bracelet.jpg' WHERE product_name = 'Bracelet';
UPDATE products SET image_url = 'images/scarf.jpg' WHERE product_name = 'Scarf';
UPDATE products SET image_url = 'images/hand bag.jpg' WHERE product_name = 'Handbag';

UPDATE products SET image_url = 'images/microwave.jpg' WHERE product_name = 'Microwave';
UPDATE products SET image_url = 'images/blender.jpg' WHERE product_name = 'Blender';
UPDATE products SET image_url = 'images/vacume cleaner.jpg' WHERE product_name = 'Vacuum Cleaner';
UPDATE products SET image_url = 'images/air purifier.jpg' WHERE product_name = 'Air Purifier';
UPDATE products SET image_url = 'images/coffee maker.jpg' WHERE product_name = 'Coffee Maker';

UPDATE products SET image_url = 'images/running shoes.jpg' WHERE product_name = 'Running Shoes';
UPDATE products SET image_url = 'images/raincoat.jpg' WHERE product_name = 'Raincoat';
UPDATE products SET image_url = 'images/gloves.jpg' WHERE product_name = 'Gloves';
UPDATE products SET image_url = 'images/swimsuit.jpg' WHERE product_name = 'Swimsuit';
UPDATE products SET image_url = 'images/flipflops.jpg' WHERE product_name = 'Flip Flops';
