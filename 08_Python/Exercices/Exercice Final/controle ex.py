## Exercice Final

if __name__ == "__main__":

    sommes = 0
    total = 0

    Nom = (input("Entre ton Nom: "))
    Nom = list(Nom)
    liste_alph = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]
    for n in range(len(Nom)):
        position = (liste_alph.index(Nom[n]))
        print((Nom[n]), position)
        sommes = sommes + position
       
    print("La somme de ", Nom," est = ", sommes)
    total = (total % 60)+1
    total_1 = total
    print("Le premier exercice est le", total)
    total = (total % 7)+1
    total_2 = total
    print("Le pas entre les exercice est de", total)

    liste_exercice = []
    compteur = 1

    while compteur < 10:
        liste_exercice.append(total_1)
        total_1 = total_1 + total_2
        compteur += 1

    print("Voici la liste d'exercice a faire :", liste_exercice)