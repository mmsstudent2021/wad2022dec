CREATE TABLE townships (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    township_name VARCHAR(50) NOT NULL,
    state_division_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (state_division_id) REFERENCES state_division(id) 
);


INSERT INTO `township` (`id`, `township_name`, `state_division_id`, `created_at`) VALUES
(1, 'bahan', 1, '2023-01-26 04:35:52'),
(2, 'chan myae thar san', 2, '2023-01-26 04:35:52'),
(3, 'pa thain gyi', 2, '2023-01-26 04:37:42'),
(4, 'za pu thiri', 3, '2023-01-26 04:37:42'),
(5, 'Kaw Lin', NULL, '2023-01-26 04:45:29');