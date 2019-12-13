 # Bonnes pratique de programmation #

 ## PRINCIPE ##

 C'est respecter certaines pratique pour faciliter la lecture, l'execution et la modification d'un code.

 * C'est faire l'analogie entre l'écriture Code et l'écriture d'un texte.
Un texte mal structuré et avec des fautes est difficile a lire.
Rajoutez a cela des phrases non structurées et des idées mal organisées et vous aurez en plus du mal à le comprendre.

* Il en va de même pour un code. Si celui ci est brouillon avec des commentaires trop abrégés, il sera difficile à comprendre.
De plus un code brouillon sera plus difficle a débugger.



* Un code bien écrit est :
 - Facile a lire par soi-même mais surtout par les autres.
 - Avoir une organisation logique.
 - Etre explicite (montrer clairement les intentions).
 - Etre soigné.


## Facile a lire ##

 - Avoir une bonne structure, des variables et des fonctions que l'on nommera avec soins.
Exemple : python demande à adopter une bonne structure puisque l'indentation pour 2 instructions de meme niveau doit etre respectée.
Si l'indentation n'est pas forcement de rigueur il convient donc d'adopter une autre forme de structure pour une lisibilité maximale.


## Organisation logique ##

 - Eviter les solutions "contre intuitive"
	Exemple d'un compteur allant de 0 a 9.
	On prefera une boucle comptant de 0 à 9 plutot qu'un boucle allant de 9 a 0.


## Explicite ##

  - Il est important d'annoter son code à l'aide de commentaires.
 Cela permettera à quiconque qui voudras lire le code, de s'y retrouver facilement.
 Cela peut aussi etre utile apres une longue période de retrouver facilement la logique qui vous aurais amené a programmer avec une méthode plutôt qu'une autre.


## Soigné ##

Cela peut être associé à une relecture pour s'assurer qu'aucun élément inutile ne subsiste.
On peut aussi y associer des opérations de maintenances pour s'assurer qu'aucuns bugs ne subsistent.
Exemple : une fonction de tri est inclu a un code principale.
Cette solution insatisfaisante est délaissée apres l'ajout d'une fonction plus pratique.
Le code n'est pas relus et la premiere fonction n'a pas ete retirée.
Celle ci peut devenir potentiellement facteur de bugs.


Coder proprement ne prend pas spécialement plus de temps.
Il est important d'apporter des commentaires les plus clairs et le splus explicite possible.
Un bon commentaire peut : 
	- Faciliter la lecture du code.
	- Apporter une précision sur pourquoi un tel choix de conception.
	- Donner un exemple pour une meilleur compréhension.

Mauvais commentaires : 
	- Qui décrit un morceau de code qui n'existe plus.
	- Qui décrit une évidence.
	- Qui n'est pas explicite.


## Nommer les choses ##

- La premiere règle est de choisir des noms de variables prononcable et facile à retenir pour nous comme pour les autres.
- Eviter les noms qui induisent un contre-sens.
- Ne pas utiliser de noms de variables qui auraient les appellations de certaines fonctions. exemple : "if"
- Essayer de ne pas utiliser de caracteres qui se ressemble fortement. Exemple : "0""O" ou encore "I""1""l"
- Essayer de garder une cohérence en utilisant qu'une seule langue (eviter le mix anglais francais).


## Les environnements de developement ##

Certains outils de developpement correspondent mieux pour l'utilisation de certains languages de programmations que d'autres.

De plus ils peuvent permettent de réorganiser facilement son code ou de renommer des variables en une fois (pour celles qui auraient des noms inapropriés).
Ils peuvent vérifier l'indentation et s'assurer que certaines règles propre à certains codes sont respectées.


(Synthèse tirée de l'ouvrage "codé proprement" de Robert C.Martin Pearson)
