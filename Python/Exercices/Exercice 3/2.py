import sys

try:
    print(sys.argv)
    premier_argument_ligne_de_cmd = sys.argv[1]
    print(premier_argument_ligne_de_cmd)
    arguement_en_integer = int(premier_argument_ligne_de_cmd)
    print(arguement_en_integer)
except IndexError as e:
    print("Vous n'avez pas saisie de parametre")
    parametre_ok = False
except ValueError as e:
    print("Votre parametre n'est pas un nombre")
    parametre_ok = False

def is_paire(un_nombre):
    """
    is_paire: retourne vrai si 
              l'argument 'un_nombre' est paire.
    """
    reste = un_nombre % 2
    if reste == 0:
        resultat = True
    else:
        resultat = False
    return resultat

def is_premier(un_nombre):
    """
    is_premier: retourne vrai si le parametre 
                'un_nombre' est premier
    """
    resultat = True
    for i in range(un_nombre-1, 1, -1):
        if un_nombre % i == 0:
            resultat = False
    return resultat

print("Liste:")
for i in range(arguement_en_integer):
    nombre = i+1
    nombre_is_paire = is_paire(nombre)
    nombre_is_premier = is_premier(nombre)
    
    str_paire = "impaire"
    if nombre_is_paire:
        str_paire = "paire"

    str_premier = ""
    if nombre_is_premier:
        str_premier = "premier"
        
    print("{0:3} -> {1:>7} | {2}".format(
        nombre,
        str_paire,
        str_premier
    ))
