<?php


class student
{
    private $name;
    private $rating;

    public function __construct($newName, $newRating){
        $this->name = $newName;
        $this->rating = $newRating;
    }

    public function getName(){
        return $this->name;
    }

    public function getRating(){
        return $this->rating;
    }
}