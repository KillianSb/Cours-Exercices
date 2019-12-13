## Exercice 7
## Vérifier si un entier est divisible par cinq.

def divisible (chiffre_entrer):
    if (chiffre_entrer % 5 == 0):
        return True
    else:
        return False
    




if __name__ == "__main__":
    chiffre_entrer = int(input("Entre le nombre: "))
    retour = divisible(chiffre_entrer)
    print(retour)