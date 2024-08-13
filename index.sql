-- Step 01 : Creating "digihealth_users" database
create database digihealth_users;

-- use "digihealth_users" database
use digihealth_users;

-- Create table "registeredusers" 
CREATE TABLE registeredusers (
    user_id VARCHAR(20) NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL UNIQUE,
    age INT NULL,
    blood_group VARCHAR(3) NULL,
    dob DATE NULL,
    country VARCHAR(255) NULL,
    city VARCHAR(255) NULL,
    password Varchar(255) NOT NULL,
    user_profile_picture LONGBLOB NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    PRIMARY KEY (user_id)
);

-- Create trigger for customized user_id for table "registeredusers"  
DELIMITER //
CREATE TRIGGER before_insert_registeredusers
BEFORE INSERT ON registeredusers
FOR EACH ROW
BEGIN
    DECLARE new_id INT;
    DECLARE custom_id VARCHAR(20);
    
    -- Get the maximum existing ID
    SELECT COALESCE(MAX(CAST(SUBSTRING(user_id, 7) AS UNSIGNED)), 0) + 1 INTO new_id FROM registeredUsers;
    
    -- Generate the custom ID
    SET custom_id = CONCAT('DH', YEAR(CURDATE()), LPAD(new_id, 4, '0'));
    
    -- Assign the custom ID to the new row
    SET NEW.user_id = custom_id;
END //

DELIMITER ;


----------------------------------------------------------------------------------------------------------------


-- Step 02 : Creating "digihealth_medicines_products" database
create database digihealth_medicines_products;

-- use "digihealth_medicines_products" database
use digihealth_medicines_products;

-- Create table "cart" 
CREATE TABLE IF NOT EXISTS cart (
    product_id VARCHAR(20) NOT NULL,
    user_id VARCHAR(255) NOT NULL,
    product_image LONGBLOB,
    product_name VARCHAR(255) NOT NULL,
    product_price INT(10) NOT NULL,
    added_on TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (product_id),
    FOREIGN KEY (user_id) REFERENCES digihealth_users.registeredusers(user_id)
);

-- Create trigger for customized product_id for table "cart" 
DELIMITER //
CREATE TRIGGER before_insert_cart
BEFORE INSERT ON cart
FOR EACH ROW
BEGIN
    DECLARE new_id INT;
    DECLARE custom_id VARCHAR(20);
    
    -- Get the maximum existing ID
    SELECT COALESCE(MAX(CAST(SUBSTRING(product_id, 8) AS UNSIGNED)), 0) + 1 INTO new_id FROM cart;
    
    -- Generate the custom ID
    SET custom_id = CONCAT('PID', YEAR(CURDATE()), LPAD(new_id, 4, '0'));
    
    -- Assign the custom ID to the new row
    SET NEW.product_id = custom_id;
END //
DELIMITER ;




-- Step 03 : Creating "digihealth_orders" database
CREATE DATABASE digihealth_orders;

-- use "digihealth_orders" database
USE digihealth_orders;

-- Create table "orders"
CREATE TABLE IF NOT EXISTS orders (
    order_id VARCHAR(20) NOT NULL,
    user_id VARCHAR(20) NOT NULL,
    product_id VARCHAR(20) NOT NULL,
    payment_mode ENUM('Credit Card', 'Debit Card', 'Net Banking', 'Cash on Delivery') NOT NULL,
    payment_status ENUM('Pending', 'Completed', 'Failed') NOT NULL,
    delivery_address TEXT NOT NULL,
    order_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    delivery_status ENUM('Pending', 'Shipped', 'Delivered', 'Returned') NOT NULL DEFAULT 'Pending',
    quantity INT NOT NULL DEFAULT 1, -- Number of items of the product in the order
    total_price DECIMAL(10, 2) NOT NULL, -- Total price of the order (product_price * quantity)
    PRIMARY KEY (order_id),
    FOREIGN KEY (user_id) REFERENCES digihealth_users.registeredusers(user_id),
    FOREIGN KEY (product_id) REFERENCES digihealth_medicines_products.cart(product_id)
);

-- Create trigger for customized order_id for table "orders"
DELIMITER //
CREATE TRIGGER before_insert_orders
BEFORE INSERT ON orders
FOR EACH ROW
BEGIN
    DECLARE new_id INT;
    DECLARE custom_id VARCHAR(20);
    
    -- Get the maximum existing ID
    SELECT COALESCE(MAX(CAST(SUBSTRING(order_id, 5) AS UNSIGNED)), 0) + 1 INTO new_id FROM orders;
    
    -- Generate the custom ID
    SET custom_id = CONCAT('OID', YEAR(CURDATE()), LPAD(new_id, 4, '0'));
    
    -- Assign the custom ID to the new row
    SET NEW.order_id = custom_id;
END //
DELIMITER ;

-- Ensure that all the foreign key constraints and triggers are working properly
-- Add indexes if necessary for better performance on foreign key columns




