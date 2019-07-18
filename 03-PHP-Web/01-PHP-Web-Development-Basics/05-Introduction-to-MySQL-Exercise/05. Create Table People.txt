CREATE TABLE people (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(200) NOT NULL,
picture MEDIUMBLOB,
height FLOAT,
weight  FLOAT,
gender ENUM('f', 'm') NOT NULL,
birthdate DATE NOT NULL,
biography TEXT);

INSERT INTO people (id,`name`, gender, birthdate)
VALUES 
(1, 'Pesho', 'm', '2018-05-21'),
(2, 'Maria', 'f', '2017-05-21'),
(3, 'Gosho', 'm', '2016-05-21'),
(4, 'Ivan', 'm', '2015-05-21'),
(5, 'Petia', 'm', '2014-05-21');