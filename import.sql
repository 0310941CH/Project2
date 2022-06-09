CREATE DATABASE `nu`;

/* Rank is redacteur of niks */
CREATE TABLE `users` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    voornaam varchar(100) NOT NULL,
    achternaam varchar(100) NOT NULL,
    username char(100) NOT NULL UNIQUE,
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
    categorie ENUM('Binnenland', 'Buitenland', 'Politiek', 'Klimaat', 'Video', 'Geld', 'Werk', 'Ondernemen', 'Onderweg', 'Voetbal', 'Formule1', 'SportOverig', 'Games', 'Reviews', 'FilmsEnSeries', 'Muziek', 'BoekEnCultuur', 'Koningshuis') NOT NULL,
);