CREATE DATABASE IF NOT EXISTS `softuni_library`;

USE `softuni_library`;

CREATE TABLE IF NOT EXISTS `genres` (
  `genres_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`genres_id`)
)
  ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `born_on` date NOT NULL,
  PRIMARY KEY (`user_id`)
)
  ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`book_id`),
  KEY `FK_books_genres` (`genre_id`),
  KEY `FK_books_users` (`user_id`),
  CONSTRAINT `FK_books_genres` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genres_id`),
  CONSTRAINT `FK_books_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
)
  ENGINE=InnoDB DEFAULT CHARSET=UTF8;

INSERT INTO `genres` (`name`)
VALUES ('Drama'), ('Educational'), ('Adventure');