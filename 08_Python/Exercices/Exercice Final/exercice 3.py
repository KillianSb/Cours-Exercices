## Exercice 3
## Bord maximum d'un triangle

def triangle (premiere_bord, deuxieme_bord):
    troisieme_eme_bord = (premiere_bord + deuxieme_bord) - 1
    return troisieme_eme_bord




if __name__ == "__main__":
    premiere_bord = int(input("Entre le premier bord: "))
    deuxieme_bord = int(input("Entre le deuxieme bord: "))
    troisieme_eme_bord = (premiere_bord + deuxieme_bord) - 1
    print(troisieme_eme_bord)
