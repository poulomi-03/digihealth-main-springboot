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
    user_profile_picture VARCHAR(255) NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    PRIMARY KEY (user_id)
);
DELIMITER //


-- > step 02 : creating trigger for customized userid 
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

