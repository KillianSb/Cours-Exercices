-- Jeu de gestion de train (sans retards, sans grève) --
--------------------------------------------------------

-- Emplacement du fichier sur ma machine :
-- SOURCE /Desktop/GIT/Cours/09_SQL/Exercices/bdd_sncf.sql
-- SOURCE C:/Desktop/GIT/Cours/09_SQL/Exercices/bdd_sncf.sql

-----------------------------------------
-- Supression de la base si existe deja--
-----------------------------------------
\! echo "Supression de la base si existe deja"
DROP DATABASE IF EXISTS SNCF;

------------------------------------
-- Création de la base de données --
------------------------------------
\! echo "Création de la base de données"
CREATE DATABASE IF NOT EXISTS SNCF;

-----------------------------------
-- Création de la table "trains" --
-----------------------------------
\! echo "Création de la table trains"
CREATE TABLE IF NOT EXISTS Trains (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    buying_price FLOAT(12, 2) NOT NULL,
    passagers_first INT DEFAULT(0),
    passagers_second INT DEFAULT(0),
    type_train VARCHAR(40) NOT NULL,
    nombre INT NOT NULL,
    nb_place INT NOT NULL,
    commentaire TEXT,
    PRIMARY KEY (id)
)
ENGINE=INNODB;