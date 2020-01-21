<?php

// Créating student class
Class Student 
{
    /**
    *Student first name
    */
    public $firstName;

    /**
     * Student last name
     */
    public $lastName;

    /***
     * Student birthdate
     */
    private $birthDate;

    /**
     * Student age
     */
    public $age;

    // Définir un constructeur
    /**
     * Constructeur
     *
     * @param String $firstName
     * @param String $lastName
     * @param String $birthDate
     */
    public function __construct (
        String $firstName,
        String $lastName,
        String $birthDate
    ){
        // on demande d'afficher la valeur de la variable "fisrtName" passée
        // en paramètre, a l'attribut "firstName" de la classe. Le "$this" permet
        // de faire référence a la classe courante (et donc un élément qui
        // s'y trouve)
        $this->firstName = $firstName;
        // on fait la meme chose pour tout les paramettre
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->age = $this->getAge();
    }

    //@TODO
    // méthode pour qui renvoie l'age de l'etudiant
    public function getAge()
    {
        // $birthDate
        $currentDate = new DateTime();
        $dateOfBirth = date_create_from_format("d/m/Y", $this->birthDate);
        $age = $dateOfBirth->diff($currentDate)->y;
        return $age;
    }

}

// Test Ici :

// Mettre le nom / prenom / age

// Students 1
$st1 = new Student("toi", "toi", "15/07/2002");
echo("<pre>");
echo("<code>");
var_dump($st1);
echo("<code>");
echo("<pre>");

// afficher l'age
echo "</br>";
echo "L'age de " .$st1->firstName. " est " .$st1->age ;
?>