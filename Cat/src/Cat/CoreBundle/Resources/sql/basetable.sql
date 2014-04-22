-----------------------------------------------------------------------------------------------
-- Table for users...
CREATE TABLE IF NOT EXISTS `users` (
	`id` int(10) PRIMARY KEY AUTO_INCREMENT,
	`firstname` VARCHAR(20) DEFAULT NULL,
	`lastname` VARCHAR(20) DEFAULT NULL,
	`email` VARCHAR(50) NOT NULL,
	`password` VARCHAR(100) NOT NULL,
	`register_date`	DATETIME NOT NULL,
	`birthdate` DATE,
	`gender` VARCHAR(1) NOT NULL
);

INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`, `register_date`) VALUES
('Admin', 'Admin', 'k.kkaya.1989@gmail.com', SHA2('admin', 256), NOW());