## les langages de progs. ##

# - Java -> 1995 : Sun Microsystems : #
Language de programmation orienté objet.
Particularité : les programmes sont compilés et exécutés dans une machine virtuelle independante du systeme d'exploitation.
Reprise de la syntaxe du C++ mais épuré.
Permet le devellopement d'applications clients serveur
Du coté serveur se démarque grace aux JSP ou (javaserver Pages), se substitue au PHP, ASP, et ASP.NET



# - JavaScript -> 1995 : Brendan Eich : #
Language de script utilisé  principalement dans les pages web interactive.
Orienté Objet, JavaScript est le langage possédant le plus large écosystème grâce à son gestionnaire de dépendances.
Avec HTML et CSS, considéré comme l'une des techno coeur du www.
La majorité des sites web l'utilisent et la plupart des navigateurs possedent un interpretteur dédié.
Permet l'interaction sur une page unique sans jamais un rechargement de page "S.P.A."


# - PHP -> 1994 : Rasmus Lerdorf : #
Hypertext preprocessor.
Language de programmation libre, interprété, souple et facile d'acces.
Multi plateforme, gratuit, il necessite une bonne comprehension des principales fonctions usuelles.
Permet de produire des pages web dynamiques via serveur HTTP.
Peut aussi fonctionner de facon locale.
Exemple de site crées en PHP : Facebook, YAHOO.
Souvent couplé à un serveur APACHE pour récuperer des infos d'une base de donnée.
Tres utilisé aujourd'hui. Permet de programmer en orienté objet comme JAVA et C++.



# - C -> : 1972 : Dennis Ritchie : #
Bas niveau et suffisament généraliste. Permettera la réécriture du noyau UNIX. Créé a partir du B par Dennis Ritchie.
L'avantage par rapport au B est que l'on se retrouve avec un vrai language compilé.



# - C++ -> : 1983 : Bjarne Stroustrup : #
Extention orientée objet du langage C développée par Bjarn Stroustrup
Generation d'un code machine spécifique a un processeur donné désigné sous le terme de code natif.



# - C# -> : 2000 : Microsoft : #
Créé par microsoft pour concurencer le JAVA et plus simple que le C++.
Lié a la plateforme .NET permet de creer des logiciels windows et des applications web.
Actuellement utilisé avec le moteur 3D UNITY dévelloppé par Unity Technologie.
L'avantage de passer par des librairies .net est de permettre la generation d'un code qui utilisera un jeu d'instructions independant du processeur. 



# - Python -> : 1991 : Guido van Rossum : #
language interpreté  et orienté objet.
Licence libre, multi plateforme. Peut etre traduit en .net ou en JAVA.
Syntaxe simple a utiliser. Outil de haut niveau utilisé comme language de script pour automatiser des taches simple mais fastidieuse.
Egalement utilisé comme language de prototype.



# - Delphi -> : 1995 : Borland : #
Language de programmation orienté objet comprenant un environnement de dévelloppement intégré.
Lors de sa sortie ce dernier apparu alors comme une alternative a VISUAL C++ ou le RAD Visual Basic pour beaucoup de develloppeur.
Actuellement present sur les plateformes  Windows, Mac, IOS, Android et Linux.
Embarque une version Objet du Language Pascal. Le typage est fort
L'environnement de développement auto-génère du code pour faciliter le travail du programmeur. Il maintient une correspondance automatique entre la vue de conception (la fenêtre que le programmeur bâtit en déposant des composants graphiques) et l'éditeur de code (la vue affichant le code source qui créera ces composants à l'exécution).



# - Ruby -> : 1995 : Yukihiro Matsumoto : #
Libre, orienté objet à typage fort et dynamique.
La programmation procedurale reste possible
Interface de programmation en language C il est notament utilisable dans Apache avec mod_ruby ou Phusion Passenger.




# - MATLAB -> : 1984 : Cleve Moler : #
Language de Scrips utilisé pour des calculs numérique.
Permet la manipulation de matrice, affichage de courbes et de données.
Peut s'interfacer avec d'autres languages tel que C,C++,JAVA et FORTRAN.
Utilisateurs de milieux tres differents. 
Peut s'utiliser avec de nombreuses boites a outils.




### Caractèristique des différents langages###

Dynamique ou static : On parle de typage statique quand la majorité des vérifications de type sont effectuées au moment de la compilation.

Au contraire, on parle de typage dynamique quand ces vérifications sont effectuées pendant l'exécution.


Interpreté : le code source (celui que vous écrivez) est interprété, par un logiciel qu'on appelle interpréteur. Celui-ci va utiliser le code source et les données d'entrée pour calculer les données de sortie

Compilé : le code source (celui que vous écrivez) est tout d'abord compilé, par un logiciel qu'on appelle compilateur, en un code binaire qu'un humain ne peut pas lire mais qui est très facile à lire pour un ordinateur. C'est alors directement le système d'exploitation qui va utiliser le code binaire et les données d'entrée pour calculer les données de sortie

#Haut niveau ou bas niveau :#

Les langages de bas niveau : 
"wiki : Le langage machine et le langage d'assemblage sont les archétypes de langages de bas niveau, puisqu'ils permettent de manipuler explicitement des registres, des adresses mémoires, des instructions machines."

Ce qui signifie qu'en language bas niveau les instructions s'adresseent directement a des adresses mémoire ou des adresses logique de composants physique. Les languages bas niveaux sont tres souvent compilés pour etre traduit directement en language machine.

Les languages haut niveaux : 
"wiki :un langage de programmation de haut niveau est un langage de programmation orienté autour du problème à résoudre, qui permet d'écrire des programmes en utilisant des mots usuels des langues naturelles (très souvent de l'anglais) et des symboles mathématiques familiers. Un langage de haut niveau fait abstraction des caractéristiques techniques du matériel utilisé pour exécuter le programme"

Ce qui signifie qu'un language haut niveau permettera de réaliser un programme proche de l'experience utilisateur.
En general ces programmes utilisent des mots usuels et des symbole mathématique. ces languages sont en général interpretés.


## Typage fort et faible :

 - Un language à typage fort necessitera l'utilisation de données manipulées correctement employée.
 Exemple : si ma donnée est une chaine de caractere et qu'il me faut spécifié au programme "string", alors j'ai un typage fort.
 en C# les type de variables sont definis par 10 types differents.
 C'est un typage fort.

Au contraire, un typage faible ne nécessitera pas une creation de variable specifique suivant les données manipulées.


Conclusion : 

Il n'est pas rare de voir des languages de programmation nés de programmeur frustré par l'utilisation de languages plus anciens.
Ces programmeur aux lieu de surmonter leur frustration, réalisent au final quelque chose de plus complexe en creant un nouveau language qui sera plus adapté a leurs besoins.
Il existe enormement de languages de programmations cependant on remarque qu'ils sont TOUS issus des meme bases : 
C++, C, ASM.


Les frameworks : 

Un framework est une librairie de fonctions pour un language de programmation spécifique.
Cela simplfie la tache en mettant à disposition tout le necessaire pour coder efficacement et rapidement.

Il existe plus de frameworks que de languages étant donnés qu'un meme language peut logiquement avoir plusieurs librairies de fonctions.


Angular JS : 2009 Google.
framework JavaScript open-source qui prend en charge l’animation, la manipulation du DOM, le routage, l’injection de dépendance ou encore le data binding.


ReactJS : 2013 Facebook
Utilisé aujourd'hui par instagram, Netflix, Yahoo.
Spécialisé dans le dévelloppement Front End.
Integre la notion de composants facile à reutiliser entre differents prjets.


Ruby on Rails : 2005 David Heinemeier Hansson 
Tres souple, idéal pour commencer dans le develloppement.
Facile d'y ajouter des fonctionnalités et dispose d'un développment rapide.


Symfony : 2005 : SensioLabs open-source, ecrit en PHP et 100% francais.
Facilite le developpement, flexible et grande communautée a l'appuis.


Django : 2005 : Django Software Foundation
Pour la création de sites web (systeme de gestions de contenus ou actualités)


Laravel : 2011 : Taylor Otwell
Framework PHP composé de plusieurs bibliothèque issues d'autres frameworks. Basé a la base sur Symphony
Permet la gestion de systemes de cache, les envois d'emails, les sessions utilisateurs, la pagination et meme creer des requêtes SQL.


ASP.NET : Utiliser pour devellopper des sites web complexe et dynamique. Utilisable avec n'importe quel language de programmation pour la pateforme .NET


SPRING : 2003 : Pivotal Software
Le plus ancien framework pour JAVA et certainement l'un des meilleurs. De nombreux outils pour developper et configurer.

IONIC : 2013 : MIT
permet le develloppement multiplateforme à partir d'un même code.
