## Exercice 6
## Il crée une liste de nombres, puis renvoie le plus grand nombre de la liste.

import math
import random

if __name__ == "__main__":

    liste_random = []
    liste_dix_chiffre = []

    for i in range(1):
        liste_random = [random.randint(0,100) for i in range(5)]
        print("Voici la liste crée", liste_random)
        liste_random.sort()
        print("Voici la liste ranger", liste_random)
    