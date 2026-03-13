-- OnlineConvert.co Database Schema
CREATE DATABASE IF NOT EXISTS onlineconvert CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE onlineconvert;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('user','admin') DEFAULT 'user',
    status ENUM('active','inactive','banned') DEFAULT 'active',
    email_verified TINYINT(1) DEFAULT 0,
    verification_token VARCHAR(255) DEFAULT NULL,
    reset_token VARCHAR(255) DEFAULT NULL,
    reset_token_expiry DATETIME DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT DEFAULT NULL,
    tool_name VARCHAR(100) NOT NULL,
    file_name VARCHAR(255) DEFAULT NULL,
    file_size INT DEFAULT NULL,
    status ENUM('success','failed') DEFAULT 'success',
    ip_address VARCHAR(45) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

CREATE TABLE favorites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    tool_name VARCHAR(100) NOT NULL,
    tool_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY unique_fav (user_id, tool_name),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE plans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) NOT NULL UNIQUE,
    price DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    billing_cycle ENUM('monthly','yearly','lifetime') DEFAULT 'monthly',
    features JSON DEFAULT NULL,
    file_size_limit INT DEFAULT 10,
    is_active TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE subscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    plan_id INT NOT NULL,
    status ENUM('active','cancelled','expired','pending') DEFAULT 'pending',
    payment_method VARCHAR(100) DEFAULT NULL,
    payment_reference VARCHAR(255) DEFAULT NULL,
    start_date DATE DEFAULT NULL,
    end_date DATE DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (plan_id) REFERENCES plans(id)
);

CREATE TABLE blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT DEFAULT NULL,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    excerpt TEXT DEFAULT NULL,
    content LONGTEXT NOT NULL,
    status ENUM('draft','published') DEFAULT 'draft',
    meta_title VARCHAR(255) DEFAULT NULL,
    meta_description TEXT DEFAULT NULL,
    views INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

CREATE TABLE tool_stats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tool_name VARCHAR(100) NOT NULL,
    uses INT DEFAULT 0,
    date DATE NOT NULL,
    UNIQUE KEY unique_tool_date (tool_name, date)
);

CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    is_read TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO plans (name, slug, price, billing_cycle, features, file_size_limit) VALUES
('Free','free',0.00,'monthly','["10MB file limit","Basic tools","Ad-supported"]',10),
('Pro','pro',9.99,'monthly','["100MB file limit","Batch processing","Ad-free","History"]',100),
('Pro Yearly','pro-yearly',79.99,'yearly','["100MB file limit","Batch","Ad-free","Save 33%"]',100),
('Lifetime','lifetime',199.00,'lifetime','["Unlimited","All tools forever","VIP support"]',999);

INSERT INTO users (name, email, password_hash, role, status, email_verified) VALUES
('Admin','admin@onlineconvert.co','$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','admin','active',1);
