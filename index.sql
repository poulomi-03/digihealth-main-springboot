-- > step 01 : Creating user table
CREATE TABLE registeredUsers (
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


-- > step 02 : creating trigger for customized userid 
DELIMITER //
CREATE TRIGGER before_insert_registeredUsers
BEFORE INSERT ON registeredUsers
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



-- Create table cart
CREATE TABLE IF NOT EXISTS cart (
    product_id VARCHAR(20) NOT NULL,
    user_id VARCHAR(255) NOT NULL,
    product_name VARCHAR(255) NOT NULL,
    added_on TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (product_id),
    FOREIGN KEY (user_id) REFERENCES users.registeredusers(user_id)
);

-- Create trigger for cart table for custom product_id
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
