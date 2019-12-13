------------
-- Test 1 --
------------

SELECT
	Animal.sexe as sexe_animal,
	Espece.nom_latin as nom_latin_espece,
	Race.nom as nom_race,
    Animal.nom as prenom_animal
FROM Animal
INNER JOIN Espece
	ON Animal.espece_id = Espece.id
LEFT JOIN Race
	ON Animal.race_id = Race.id
WHERE Espece.nom_courant IN ('Chat')
ORDER BY Espece.nom_courant DESC, Race.nom;

------------
-- Test 2 --
------------

SELECT
    Animal.sexe as sexe_animal,
    Animal.nom as prenom_animal,
    Animal.id as numero_animal,
    Animal.date_naissance as date_naissance,
    Race.nom as nom_race
FROM Animal
INNER JOIN Espece
	ON Animal.espece_id = espece.id
    -- AND Animal.id < '20'
    AND Animal.sexe = 'F'
INNER JOIN Race
	ON Animal.race_id = race.id
WHERE 
	Espece.nom_courant = 'Chat';

------------
-- Test 3 --
------------

SELECT
    Espece.nom_courant as type_animal,
    Animal.sexe as sexe_animal,
    Animal.nom as prenom_animal,
    Race.nom as nom_race,
    Animal.date_naissance as date_naissance,
    Race.description as description_race
    -- Espece.nom_latin as nom_latin_espece,
FROM Animal
INNER JOIN Espece
	ON Animal.espece_id = espece.id
INNER JOIN Race
    ON Animal.race_id = Race.id
WHERE
    Espece.nom_courant = 'Chat'
ORDER BY Espece.nom_courant DESC, Race.nom;

------------
-- Test 4 --
------------

-- Je veux les "Chien" et "Chat", avec leurs 
-- "Date de naissance" 
-- + leurs "Nom" + "Leurs ID" Ranger ensemble née 
--le avant "2007-12-00"

SELECT
    Animal.id as identifiant_animal,
    Espece.nom_courant as type_animal,
    Animal.nom as prenom_animal,
    Animal.date_naissance as date_naissance,
    Animal.mere_id as mere_id
FROM Animal
INNER JOIN Espece
	ON Animal.espece_id = espece.id
    AND date_naissance > "2007-12-00"
INNER JOIN Race
    ON Animal.race_id = Race.id
WHERE 
	Espece.nom_courant IN ('Chat', 'Chien') AND mere_id IS NOT NULL
ORDER BY Espece.nom_courant, Animal.nom DESC;

------------
-- Rappel --
------------
 
SELECT * FROM `espece`;

------------------------------------------------------------------------------------------------------------------------------------------------

-- Create a new table called 'Accessoires'
-- Drop the table if it already exists
CREATE TABLE IF NOT EXISTS Accessoires
(
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT, -- primary key column
    type_accessoires VARCHAR(40) NOT NULL,
    nombre INT NOT NULL,
    date_d_achat DATETIME NOT NULL,
    commentaire TEXT,
    PRIMARY KEY (id)
    -- specify more columns here
)
ENGINE=INNODB;
GO

ALTER TABLE Accessoires

-- Insert accessoires

INSERT INTO accessoires (type_accessoires, nombre, date_d_achat, commentaire)
VALUES ('Croquette', '20', '2009-05-12 22.10.22', 'Parfait pour les chats !');
VALUES ('Collier', '10', '2011-05-12 22.09.22', 'Collier pour chiens')

------------------------------------------------------------------------------------------------------------------------------------------------
