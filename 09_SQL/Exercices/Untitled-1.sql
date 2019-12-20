-- 1 --

SELECT
    Animal.date_naissance as date_de_naissance,
    Animal.nom as prenom_animal,
	Animal.sexe as sexe_animal,
	Espece.nom_latin as nom_latin_espece,
	Race.nom as nom_race
FROM Animal
INNER JOIN Espece
	ON Animal.espece_id = Espece.id
LEFT JOIN Race
	ON Animal.race_id = Race.id
WHERE Espece.nom_courant IN ('Chat')
AND animal.sexe IN ('M')
AND race.nom IN ('Maine coon');

-- SOUS REQUETE --

SELECT
    date_naissance,
    nom,
    sexe,
    race_id
FROM Animal
WHERE Race_id = (SELECT id FROM race WHERE nom = 'Maine coon')
AND sexe IN ('M');

-- 2 -- 

SELECT
    Animal.date_naissance as date_naissance,
    Animal.sexe as sexe_animal,
    Espece.nom_courant as nom_courant,
    Animal.nom as prenom_animal
FROM Animal
INNER JOIN Espece
    ON Animal.espece_id = Espece.id
WHERE Espece.nom_courant LIKE '%Perroquet%'
AND Animal.sexe IN ('M')
AND date_naissance > '2008-01-00';

-- SOUS REQUETE --

SELECT 
    Animal.date_naissance,
    Animal.sexe,
    Animal.nom
FROM Animal
WHERE espece_id = (SELECT id FROM espece WHERE nom_courant LIKE '%Perroquet%')
AND Animal.sexe IN ('M')
AND date_naissance > '2008-01-00';

-- 3 --

SELECT
    Animal.nom as prénom_animal,
    Espece.nom_courant as nom_courant,
    Animal.sexe as sexe_animal,
    Race.nom as nom_de_la_race,
    Race.description as description_de_la_race
FROM Animal
INNER JOIN Espece
    ON Animal.espece_id = Espece.id
LEFT JOIN Race
    ON Animal.Race_id = Race.id
WHERE Animal.sexe IN ('F')
AND Espece.id = '1'
AND Race.nom IS NOT NULL
AND Race.description IS NOT NULL
ORDER BY animal.nom;

-- SOUS REQUETE --

SELECT 
    Espece.nom_courant as nom_courant,
    Animal.sexe,
    Animal.nom,
    Race.nom as nom_de_la_race,
    Race.description as describ
FROM Animal
WHERE espece_id = (SELECT id FROM espece WHERE nom_courant LIKE '%Perroquet%')
AND sexe IN ('F')
AND nom_de_la_race IS NOT NULL
AND describ IS NOT NULL
ORDER BY animal.nom;

AND Espece.id = '1'

SELECT Animal.nom, Animal.sexe,
(SELECT nom FROM race WHERE id = (SELECT id FROM race WHERE nom LIKE '%maine coon%')) as nom_race,
(SELECT nom_courant FROM espece WHERE id = (SELECT id FROM espece WHERE nom_courant LIKE '%chat%')) as nom_espece
FROM Animal
WHERE Animal.sexe = 'M' AND Animal.race_id = (SELECT id FROM race WHERE nom LIKE '%maine coon%');

SELECT
    Animal.nom as prénom_animal,
    (SELECT Espece.nom_courant FROM Espece WHERE Espece.id IN ('1')),
    (SELECT Animal.sexe FROM Animal WHERE sexe IN ('F')),
    (SELECT Race.nom FROM Race WHERE Race.id = '1' ),
    (SELECT Race.description FROM Race WHERE Race.description IS NOT NULL)
WHERE Animal.sexe IN ('F')
ORDER BY animal.nom;