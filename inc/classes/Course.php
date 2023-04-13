<?php

class Course{
    public $title;
    public $image;
    public $shortDescription;
    public $description;
    public $programContent;
    public $numberOfHours;
    public $price;
    public $classDate;
    public $professor;
    public $modality;
    public $requiredLevel;

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

    public function changePrice($price){
        $this->price = $price;
    }
}

