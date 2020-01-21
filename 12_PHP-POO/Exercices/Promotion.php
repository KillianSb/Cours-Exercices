<?php

include 'Students-copie.php';

Class Promotion
{
    /**
    *Students
    */
    public $students;

    /**
    *Number Students
    */
    public $numberStudents;

    /**
     * Number Men
     */
    public $numberMen;

    //constructeur
    // Définir un constructeur
    /**
     * Constructeur
     *
     * @param Array $students
     * 
     */
    public function __construct (
        Array $students
    ){

        $this->students = $students;
        $this->numberStudents = $this->countStudentsNumber();
        $this->numberMen = $this->countNuberMen();
    }


    //nombre d'élève dans la promo
    public function countStudentsNumber()
    {
        $numberStudents = count($this->students);
        return $numberStudents;
    }

    //nombre d'hommes
    public function countNuberMen()
    {
        foreach ($this->students as $student)
        var_dump($student->sexe);
    }



    //nombre de femmes

    //pourcentage hommes

    //pourcentage femmes

    //nombre d'étudiant pour chaque spécialité

    //pourcentage de chaque spécialité

    //moyenne de la classe

    //plus mauvais élève
    
    //meilleur élève

    //moyenne age

    //age minimun

    //age maximum

    //classer les élève par ordre alphabétique

    //nombre d'élèves ayant un nom OU un prenom contenant la lettre "a"

    //nombre d'élèves ayant uniquement le prenom contenant la lettre "u"

    //nombre d'élève nés avant 1999

    //nombre d'élève nés apres 2001
}

$prom1 = new Promotion([$st1,$st2]);

var_dump ($prom1)

?>