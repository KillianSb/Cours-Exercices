# On demande son âge à l'utilisateur
age = int(input("Que âge avez-vous ? "))

# Si il a en dessous de 18 ans
if age < 18:
    # Il est mineur
    print("Vous êtes mineur.")
# Sinon (donc si il a + de 18 ans)
else:
    # Il est majeur
    print("Vous êtes majeur")