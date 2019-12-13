from collections import Counter


lien_fichier = (input("Quel fichiers doit-je ouvrir ?"))

fichier =  open (lien_fichier, "r")
contenu_fichier = fichier.read()
fichier.close()
print(contenu_fichier)
frequence = Counter(contenu_fichier)
print("Voici le nombre d'occurrences du caractère choisi :")

for (caractère_entrer, value) in frequence.items():
    caractère_entrer = (input("Quel mot/phrase ou caractère voulez vous trouver ?"))
    print("Nombre d'occurrences de ", caractère_entrer, " est : ", value)

# if __name__ == "__main__":