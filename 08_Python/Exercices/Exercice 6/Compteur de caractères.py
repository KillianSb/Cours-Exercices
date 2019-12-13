from collections import Counter

if __name__ == "__main__":
    liste_ranger = []


lien_fichier = (input("Quel fichiers doit-je ouvrir ?"))

fichier =  open (lien_fichier, "r")
contenu_fichier = fichier.read()
fichier.close()
print(contenu_fichier)
frequence = Counter(contenu_fichier)
print("Voici le nombre d'occurrences de tous les caractères :")

for (key, value) in frequence.items():
    print("Nombre d'occurrences de ", key, " est : ", value)