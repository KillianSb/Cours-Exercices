-- Jeu de gestion de train (sans retards, sans grèves).

-- Supprimer une base de données.
\! echo "Suppression d'une base de données sncf si elle éxiste"
DROP DATABASE IF EXISTS sncf;
-- Créer une base de données.
\! echo "Création de la base de données sncf"
CREATE DATABASE IF NOT EXISTS sncf;

-- Utilisation de la base de données sncf
USE sncf;
-- Creation d'une table
CREATE TABLE IF NOT EXISTS Trains (
-- Définition des champs
id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
buying_price FLOAT(12,2) NOT NULL, -- Prix d'achat
passengers_first INT DEFAULT(0),
passengers_second INT DEFAULT(0),
-- Définition des clés primaires & étrangères
PRIMARY KEY (id)
)
-- Définition du moteur
ENGINE=INNODB;

-- Creation d'une table
CREATE TABLE IF NOT EXISTS Travels (
-- Définition des champs
id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
destination_train_station VARCHAR(52) NOT NULL, -- Gare de destination
travel_buying_price FLOAT(6,2) UNSIGNED NOT NULL, -- Prix du trajet
travel_duration INT UNSIGNED NOT NULL,-- durée du trajet en heure
-- Définition des clés primaires & étrangères
PRIMARY KEY (id)
)
-- Définition du moteur
ENGINE=INNODB;

-- Creation d'une table
CREATE TABLE IF NOT EXISTS employees (
-- Définition des champs
id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
name VARCHAR(128) NOT NULL, -- nom de l'employé
intern_grade VARCHAR(128) NOT NULL, -- fonction au sein de l'entreprise
hourly_wage FLOAT(6,2) UNSIGNED NOT NULL, -- salaire horaire
-- Définition des clés primaires & étrangères
PRIMARY KEY (id)
)
-- Définition du moteur
ENGINE=INNODB;