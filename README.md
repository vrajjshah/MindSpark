# MindSpark
for MindSpark event(round1) of ADIT Techfest 2018

<<<<<<< HEAD
Download https://www.apachefriends.org/download.html and the run it.

step 1 - start Apache
step 2-  start MySQL

Clone this repository in the htdocs folder of xampp (inside the folder named php_project)

now run the following in your SQL tab of xampp

1. CREATE DATABASE `secure_login`;

2. CREATE USER 'sec_user'@'localhost' IDENTIFIED BY '12345';
GRANT SELECT, INSERT, UPDATE ON `secure_login`.* TO 'sec_user'@'localhost';

3. CREATE TABLE `secure_login`.`members` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `password` CHAR(128) NOT NULL
) ENGINE = InnoDB;

4. CREATE TABLE `secure_login`.`login_attempts` (
    `user_id` INT(11) NOT NULL,
    `time` VARCHAR(30) NOT NULL
) ENGINE=InnoDB

run the page by typing http://localhost/php_project/index.php

them create a test user and test that http://localhost/php_project/protected_page.php is being opened without login or not!

if it shows You are not authorized to access this page (without logging in with the test user) then you have succefully implemented this project.
=======
USE This branch for your own experimental development purposes.
>>>>>>> 1c18998ca57d387f01483de861d0699227e797b9
