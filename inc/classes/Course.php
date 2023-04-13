<?php
 require "../data.php";
class Course{
    private $title;
    private $image;
    private $shortDescription;
    private $description;
    private $programContent;
    private $numberOfHours;
    private $price;
    private $classDate;
    private $professor;
    private $modality;
    private $requiredLevel;

    public function __construct($title, $image, $shortDescription, $description, $programContent, $numberOfHours, $price, $classDate, $professor, $modality, $requiredLevel){
        $this->title = $title;
        $this->image = $image;
        $this->shortDescription = $shortDescription;
        $this->description = $description;
        $this->programContent = $programContent;
        $this->numberOfHours = $numberOfHours;
        $this->price = $price;
        $this->classDate = $classDate;
        $this->professor = $professor;
        $this->modality = $modality;
        $this->requiredLevel = $requiredLevel;
    }
    public function setPrice($price){
        $this->price = intval($price);
     }

    public function getTitle(){
        return $this->title;
    }

    public function getImage(){
        return $this->image;
    }

    public function getShortDescription(){
        return $this->shortDescription;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getProgramContent(){
        return $this->programContent;
    }

    public function getNumberOfHours(){
        return $this->numberOfHours;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getClassDate(){
        return $this->classDate;
    }

    public function getProfessor(){
        return $this->professor;
    }

    public function getModality(){
        return $this->modality;
    }

    public function getRequiredLevel(){
        return $this->requiredLevel;
    }

   



}

