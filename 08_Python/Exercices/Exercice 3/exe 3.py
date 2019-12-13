if __name__ == "__main__":

    with open("fichier_text.txt", 'tr') as f:
        contenu = f.read()
        print(contenu)

    fichier = open("fichier_text.txt", 'tr')
    contenu = fichier.read()
    fichier.close()