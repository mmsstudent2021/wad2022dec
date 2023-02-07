CREATE TABLE state_division (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO `state_division` (`id`, `name`, `created_at`) VALUES
(1, 'yangon', '2023-01-26 04:24:16'),
(2, 'mandalay', '2023-01-26 04:24:16'),
(3, 'Nay Pyi Taw', '2023-01-26 04:28:24'),
(4, 'Shan', '2023-01-26 04:28:24'),
(5, 'Kachin', '2023-01-26 04:28:38');