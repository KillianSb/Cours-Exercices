import math
import random
from pprint import pprint

def fonction_tuple(Liste,A,B):
    tuple1 = A + B
    resultat = Liste[A:B]

    return tuple(resultat)

if __name__ == "__main__":
    # pprint(dir(match))
    # pprint(dir(random))
    liste_random = []
    liste_dix_chiffre = []

    for i in range(100):
        liste_random = [random.randint(0,100) for i in range(100)]
        print(liste_random)
        liste_dix_chiffre = liste_random[-10:]
        liste_dix_chiffre.sort()
        print(liste_dix_chiffre)

    lst = list("azertyuiop")
    print(lst)
    print(fonction_tuple(lst, 2,3))
    print(fonction_tuple(list("QSDFGHJKLM"), 2,3))