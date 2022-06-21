CREATE DATABASE `nu`;

/* Rank administrator = 2, redacteur = 1, gebruiker = 0 */
CREATE TABLE `users` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    voornaam varchar(100) NOT NULL,
    achternaam varchar(100) NOT NULL,
    email varchar(100) NOT NULL UNIQUE,
    passwords varchar(255) NOT NULL,
    rank varchar(100) NOT NULL
);

CREATE TABLE `berichten` (
    berichtId MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titel varchar(100) NOT NULL,
    samenvatting TINYTEXT NOT NULL,
    omschrijving LONGTEXT NOT NULL,
    datum_toegevoegd datetime NOT NULL,
    datum_aangepast datetime NOT NULL,
    auteur varchar(100) NOT NULL,
    images varchar(255) NOT NULL,
    image_auteur varchar(255) NOT NULL,
    categorie ENUM('Binnenland', 'Buitenland', 'Politiek', 'Klimaat') NOT NULL
);