CREATE DATABASE IF NOT EXISTS `softuni_bazar`;

USE `softuni_bazar`;

CREATE TABLE IF NOT EXISTS `categories` (
                                          `category_id` int(11) NOT NULL AUTO_INCREMENT,
                                          `name` varchar(50) NOT NULL,
                                          PRIMARY KEY (`category_id`)
)
  ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
                                     `user_id` int(11) NOT NULL AUTO_INCREMENT,
                                     `username` varchar(255) NOT NULL UNIQUE ,
                                     `password` varchar(255) NOT NULL,
                                     `full_name` varchar(255) NOT NULL,
                                     `location` varchar(255) NOT NULL,
                                     `phone` varchar(255) NOT NULL,
                                     PRIMARY KEY (`user_id`)
)
  ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `items` (
                                     `item_id` int(11) NOT NULL AUTO_INCREMENT,
                                     `title` varchar(50) NOT NULL,
                                     `price` decimal (10, 2) NOT NULL,
                                     `description` text NOT NULL,
                                     `image` text NOT NULL,
                                     `category_id` int(11) NOT NULL,
                                     `user_id` int(11) NOT NULL,
                                     PRIMARY KEY (`item_id`),
                                     KEY `FK_books_genres` (`category_id`),
                                     KEY `FK_books_users` (`user_id`),
                                     CONSTRAINT `FK_items_genres` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
                                     CONSTRAINT `FK_items_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
)
  ENGINE=InnoDB DEFAULT CHARSET=UTF8;

INSERT INTO `categories` (`name`)
VALUES ('Electronics'), ('Clothes'), ('Other');