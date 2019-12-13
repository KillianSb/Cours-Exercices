## Exercice 10
## Renvoyer le dernier élément d'une liste.

import math
import random

def liste_random (liste):
    liste = [random.randint(0,100) for i in range(5)]
    print("Voici la liste", liste)
    return liste


if __name__ == "__main__":
    liste = []
    retour = liste_random(liste)
    restultat = (retour[-1])
    print("Le dernier chiffre est", restultat)