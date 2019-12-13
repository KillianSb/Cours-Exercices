-- 1. Combien de races avons-nous dans la table Race ?

SELECT COUNT(*) 
FROM Race;

-- 2. De combien de chiens connaissons-nous le père ?

SELECT COUNT(pere_id)
FROM Animal
INNER JOIN Espece ON Espece.id = Animal.espece_id
WHERE Espece.nom_courant = 'Chien';

-- 3. Quelle est la date de naissance de notre plus jeune femelle ?

SELECT MAX(date_naissance) 
FROM Animal
WHERE sexe = 'F';

-- 4. En moyenne, quel est le prix d'un chien ou d'un chat de race, par espèce, et en général ?

SELECT nom_courant AS Espece, AVG(Race.prix) AS prix_moyen
FROM Race
INNER JOIN Espece ON Race.espece_id = Espece.id
WHERE Espece.nom_courant IN ('Chat', 'Chien')
GROUP BY Espece.nom_courant WITH ROLLUP;

-- 5. Combien avons-nous de perroquets mâles et femelles, et quels sont leurs noms (en une seule requête, bien sûr) ?

SELECT sexe, COUNT(*) AS Nombre, GROUP_CONCAT(nom SEPARATOR ', ') AS Noms
FROM Animal
INNER JOIN Espece ON Animal.espece_id = Espece.id
WHERE nom_courant = 'Perroquet amazone'
GROUP BY sexe;


-- 1. Quelles sont les races dont nous ne possédons aucun individu ?

SELECT Race.nom, COUNT(Animal.race_id) AS nombre
FROM Race
LEFT JOIN Animal ON Animal.race_id = Race.id
GROUP BY Race.nom
HAVING nombre = 0;

-- 2. Quelles sont les espèces (triées par ordre alphabétique du nom latin) dont nous possédons moins de cinq mâles ?

SELECT Espece.nom_latin, COUNT(espece_id) AS nombre
FROM Espece
LEFT JOIN Animal ON Animal.espece_id = Espece.id
WHERE sexe = 'M' OR Animal.id IS NULL
GROUP BY Espece.nom_latin
HAVING nombre < 5;

-- 3. Combien de mâles et de femelles de chaque race avons-nous, avec un compte total intermédiaire pour les races (mâles et femelles confondues) et pour les espèces ? Afficher le nom de la race et le nom courant de l'espèce.

SELECT Animal.sexe, Race.nom, Espece.nom_courant, COUNT(*) AS nombre
FROM Animal
INNER JOIN Espece ON Animal.espece_id = Espece.id
INNER JOIN Race ON Animal.race_id = Race.id
WHERE Animal.sexe IS NOT NULL
GROUP BY Espece.nom_courant, Race.nom, sexe WITH ROLLUP;

-- 4. Quel serait le coût, par espèce et au total, de l'adoption de Parlotte, Spoutnik, Caribou, Cartouche, Cali, Canaille, Yoda, Zambo et Lulla ?

SELECT Espece.nom_courant, SUM(COALESCE(Race.prix, Espece.prix)) AS somme
FROM Animal
INNER JOIN Espece ON Espece.id = Animal.espece_id
LEFT JOIN Race ON Race.id = Animal.race_id
WHERE Animal.nom IN ('Parlotte', 'Spoutnik', 'Caribou', 'Cartouche', 'Cali', 'Canaille', 'Yoda', 'Zambo', 'Lulla')
GROUP BY Espece.nom_courant WITH ROLLUP;

-- 