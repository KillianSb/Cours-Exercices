## Exercice 2
## Renvoie le prochain nombre de l'entier passé

def addition (numero):
    numero = int(numero)
    numero += 1
    return numero


if __name__ == "__main__":
    numero = (input("Entre un nombre: "))
    numero = addition(numero)
    print(numero)
    