DROP TABLE IF EXISTS `debt`;
DROP TABLE IF EXISTS `user_team_provides`;
DROP TABLE IF EXISTS `team_provides`;
DROP TABLE IF EXISTS `user_trade_type`;
DROP TABLE IF EXISTS `trade_type`;
DROP TABLE IF EXISTS `user_company`;
DROP TABLE IF EXISTS `company`;
DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(30) NOT NULL,
  `status` VARCHAR(30) NULL,
  `emergency_contact_phone` VARCHAR(30) NOT NULL,
  `emergency_contact_name` VARCHAR(255) NOT NULL,
  `birthday` DATE NULL,
  `address` VARCHAR(255) NULL,
  `password_hash` VARCHAR(255) NOT NULL,
  `created_at` INT NOT NULL,
  `updated_at` INT NOT NULL
) default charset utf8;

CREATE TABLE `company` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `status` VARCHAR(30) NULL,
  `created_at` INT NOT NULL,
  `updated_at` INT NOT NULL
) default charset utf8;

CREATE TABLE `user_company` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `company_id` INT NOT NULL,
  `created_at` INT NOT NULL,
  `updated_at` INT NOT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) default charset utf8;

CREATE TABLE `trade_type` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `value` VARCHAR(255) NOT NULL,
  `status` VARCHAR(30) NULL,
  `created_at` INT NOT NULL,
  `updated_at` INT NOT NULL
) default charset utf8;

CREATE TABLE `user_trade_type` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `trade_type_id` INT NOT NULL,
  `created_at` INT NOT NULL,
  `updated_at` INT NOT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`trade_type_id`) REFERENCES `trade_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) default charset utf8;

CREATE TABLE `team_provides` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `value` VARCHAR(255) NOT NULL,
  `status` VARCHAR(30) NULL,
  `created_at` INT NOT NULL,
  `updated_at` INT NOT NULL
) default charset utf8;

CREATE TABLE `user_team_provides` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `team_provide_id` INT NOT NULL,
  `created_at` INT NOT NULL,
  `updated_at` INT NOT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`team_provide_id`) REFERENCES `team_provides` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) default charset utf8;

CREATE TABLE `debt` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `value` DECIMAL(12, 2) NOT NULL,
  `due_date` DATE NOT NULL,
  `created_at` INT NOT NULL,
  `updated_at` INT NOT NULL,
  FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) default charset utf8;
