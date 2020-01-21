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

    /**
     * Student marks
     */
    public $marks;

    /**
     * Student marksAverage
     */
    public $marksAverage;

    // Définir un constructeur
    /**
     * Constructeur
     *
     * @param String $firstName
     * @param String $lastName
     * @param Array $marks
     */
    public function __construct (
        String $firstName,
        String $lastName,
        Array $marks
    ){
        // on demande d'afficher la valeur de la variable "fisrtName" passée
        // en paramètre, a l'attribut "firstName" de la classe. Le "$this" permet
        // de faire référence a la classe courante (et donc un élément qui
        // s'y trouve)
        $this->firstName = $firstName;
        // on fait la meme chose pour tout les paramettre
        $this->lastName = $lastName;
        $this->marks = $marks;
        // On calcul ici la moyenne de l'étudiant, et on l'affecte a
        // l'attribut "marksAverage" pour ne pas a avoir a la recalculer
        $this->average(); 

    }
    

    // méthode qui renvoie la moyenne des notes
    /**
     * Method which calculate the average of the Student Marks
     * based on the "marks" attribute and set 
     *
     * @return void
     */
    public function average(): void
    {
        $this->marksAverage = array_sum($this->marks) / count($this->marks);
    }

    // méthode pour ajouter les notes
    /**
     * Method which add mark to the "marks" attribute array
     * 
     * @param int  $markToAdd
     * @return void
     */
    public function addMark(int $markToAdd): void
    {
        // on ajoute la nouvelle note au tableau "marks"
        $this->marks[] = $markToAdd;
        // on met a jour la moyenne
        $this->average();
    }

    // méthode pour modifier les notes
    /**
     * updtaemark
     *
     * @param integer $index
     * @param integer $newMark
     * @return void
     */
    public function updateMark(int $index, int $newMark) {
        if ($this->checkIndex($index)) {
            // on modifie la note
            $this->marks[index] = $newMark;
            //on recalcul la moyenne
            $this->Average();
        }
    }
    
    // méthode pour supprimer les notes
    /**
     * Method which remove mark to the "marks" attribute array
     * 
     *  @param int  $markToAdd
     *  @return void
     */
    public function removeMark(int $markRemove): void
    {
        unset($this->marks[$markRemove]);
        $this->marks = $array = array_values($this->marks);
        // on met a jour la moyenne
        $this->average();
    }

    /**
     * Method which returns whether an index exists in the marks array
     *
     * @param integer $index
     * @return Boolean
     */
    private function checkIndex(int $index): Bool
    {
        if (isset($this->marks[$index])){
            return True;
        }
        return False;
    }

}

// Test Ici :

// Students 1
$st1 = new Student("kevin", "niel", [0, 0, 1, 0]);
echo("<pre>");
echo("<code>");
var_dump($st1);
echo("<code>");
echo("<pre>");

// Students 2
$st2 = new Student("killian", "sieniski", [16, 20, 17, 14]);
echo("<pre>");
echo("<code>");
var_dump($st2);
echo("<code>");
echo("<pre>");

// Add marks number is ()
$st1->addMark(20);
$st2->addMark(19);

// afficher la moyenne des notes
echo "</br>";
echo "le nom est " .$st1->firstName;
echo "</br>";
echo "le nom est " .$st2->firstName;

// afficher les tableaux
var_dump($st1->marks);
echo "</br>";
var_dump($st2->marks);
