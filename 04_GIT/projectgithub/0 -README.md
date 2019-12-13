⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️
## Les Nom des contributeurs : ##
## - Killian Sieniski 
## - Eric Cunniet 
## - Olivier Quillet


# 1. une description de votre projet 
Le projet consiste à ce que nous créons nos propre cours qui nous aideront dans le futur

# 2. les prérequis à l’installation 
Aucun prérequis d installation spécifique

# 3. un tuto d’installation step-by-step 
 - 1 ouvrez le navigateur
 - 2 lancez la page "https://github.com"
 - 3 Creez un compte Github 
 - 4 avec votre compte ouvrez "https://github.com/utranium/projet-github.git" pour acceder aux pages

# 4. les explications pour le paramétrage 
Il existe 6 types de tests. Les tests sont décrits dans fichier json appelé par le script

- requery_field : test sur la présence de champs obligatoires,
- featurecount : test sur le nombre d'enregistrements,
- datatype : test sur le type de données d'un champ,
- notnull : test sur l'absence de valeurs nulles,
- allowedvalues : test sur les valeurs autorisées d'un champ,
- uniquevalue : test sur l'unicité des valeurs d'un champ,
- Chaque test doit comporter les propriétés obligatoires suivantes


* id : Identifiant unique du test - Chaine de charactères
* nom : Nom ou description du test. Cette valeur est reprise dans le rapport d'analyse
* type : Type de test.

En fonction de chaque test, des paramètres supplémentaires sont disponibles

## 1 - Test sur la présence champs obligatoires :
Le paramètre fields est une liste de champs

 {
   	"type": "requery_field",
   	"fields": ["champ1", champ2"]
 }
## 2 - Test sur le nombre d'enregistrements
{
   	"type": "featurecount",
   	"nombre": 100
 }
 ## 3 - Test sur le type de données.
Le paramètre datatype est un type OGRFieldType. Les valeurs possibles sont : String, Integer, Integer64, Real, Date, Time. Le paramètre field précise le champ concerné.

{
   	"type": "datatype",
"field": "champ1",
   	"datatype": "String"
 }
## 4 - Test sur l'absence de valeurs nulles.
Le paramètre critere est une expression de type SQL WHERE. Il s'agit d'un paramètre obligatoire. Si on ne souhaite pas de filtre, il faut mettre critere : "" Le paramètre fields est une liste de champs.

{
   	"type": "notnull",
   	"fields": ["champ1", champ2"],
   	"critere" : "champ3 = 'BB1'"
 }
## 5 - Test sur les valeurs autorisées d'un champ
Le paramètre critere est une expression de type SQL WHERE. Il s'agit d'un paramètre obligatoire. Si on ne souhaite pas de filtre, il faut mettre critere : "" Le paramètre rules est une liste de champs / valeurs

{
   	"type": "allowedvalues",       	
   	"critere" : "champ3 = 'BB1'",
   	"rules" : [{
       	"field": "champ4",
       	"values": ["1", "2", "3"]
       	}]
 }
## 6 - Test sur les valeurs uniques.
Le paramètre field indique le nom du champ à tester.

{
   	"type": "uniquevalues",
   	"field": "champ0"
 }
Prérequis
le script python utilise la librairie gdal/ogr qui doit être installée.

# 5. ce qui est nécessaire en plus
il est necessaire d avoir un PC portable ou fixe pour visualiser les cours

⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️⚠️
