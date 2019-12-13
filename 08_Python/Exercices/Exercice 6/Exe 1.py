from pprint import pprint

if __name__ == "__main__":
    dico = {}

    dico['une_valeur_de_cle'] = 4
    #pprint(dico)

    valeur = dico['une_valeur_de_cle']
    #pprint(valeur)

    dico['une_autre_valeur_de_cle'] = list(range(7))
    dico['une_autre_valeur_de_cle'] = 6

    pprint(dico, incident=2, with=10)

    for element in dico:
        print(element)
        print(dico[element])

pprint(dir(dico))

valeur = dico['une_valeur_de_cle']
print(valeur)
valeur = dico.get('une_autre_valeur_de_cle')
print(valeur)