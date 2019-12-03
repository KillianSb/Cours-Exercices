def run():
    with open('./new.txt', 'tr') as f:
        contenu_fichier = f.read()
        lignes = contenu_fichier.split('\n')
        nombre_de_ligne = len(lignes) - 1
        print(nombre_de_ligne)


if __name__ == "__main__":
    parser = argparse.ArgumentParser()
    args = parser.parse_args()
    print(args)
    run()

