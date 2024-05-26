-- Buat tabel users
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Isi tabel users dengan data dummy
INSERT INTO `users` (`name`, `email`) VALUES
('John Doe', 'john.doe@example.com'),
('Jane Smith', 'jane.smith@example.com'),
('Michael Johnson', 'michael.johnson@example.com'),
('Emily Brown', 'emily.brown@example.com'),
('Daniel Wilson', 'daniel.wilson@example.com'),
('Olivia Martinez', 'olivia.martinez@example.com'),
('James Anderson', 'james.anderson@example.com'),
('Sophia Taylor', 'sophia.taylor@example.com'),
('William Thomas', 'william.thomas@example.com'),
('Amelia Harris', 'amelia.harris@example.com'),
('Benjamin White', 'benjamin.white@example.com'),
('Isabella Lewis', 'isabella.lewis@example.com'),
('Mason Clark', 'mason.clark@example.com'),
('Elizabeth Rodriguez', 'elizabeth.rodriguez@example.com'),
('Elijah Martinez', 'elijah.martinez@example.com'),
('Ava Lee', 'ava.lee@example.com'),
('Alexander Walker', 'alexander.walker@example.com'),
('Abigail Hall', 'abigail.hall@example.com'),
('Michael Wright', 'michael.wright@example.com'),
('Sofia Young', 'sofia.young@example.com');
