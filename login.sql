CREATE TABLE login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    login_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);