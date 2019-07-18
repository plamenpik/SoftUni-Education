CREATE TABLE users (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) UNIQUE NOT NULL,
`password` VARCHAR(26) NOT NULL,
profile_picture MEDIUMBLOB,
last_login_time DATETIME,
is_deleted BOOLEAN);

INSERT INTO users (id, username, `password`)
VALUES 
(1, 'Pesho', '123'),
(2, 'Maria', '1234'),
(3, 'Gosho', '12345'),
(4, 'Ivan', '123456'),
(5, 'Petia', '1234567');