## Exercice 8
## Concaténation de deux listes entières.

import math
import random

def concatenation (liste1, liste2):

    liste1 = [random.randint(0,100) for i in range(5)]
    print("liste1", liste1)

    liste2 = [random.randint(0,100) for a in range(2)]
    print("liste2", liste2)
    return liste1 + liste2


if __name__ == "__main__":
    liste1 = []
    liste2 = []
    retour = concatenation(liste1, liste2)
    retour.sort()
    print(retour)