CREATE DATABASE `nu`;

CREATE TABLE `users` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    voornaam varchar(100) NOT NULL,
    achternaam varchar(100) NOT NULL,
    username char(100) NOT NULL UNIQUE,
    passwords varchar(255) NOT NULL,
    rank integer(10) NOT NULL
);