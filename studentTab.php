<?php


class studentTab
{
    private $tab = array();
    private $studentNbr;

    public function __construct() {
        $this->studentNbr = 0;
    }

    public function getStudentNbr(){
        return $this->studentNbr;
    }

    public function addStudent($newStudent){
        if (count($this->tab) != 0) {
            $indexCounter = 0;
            foreach ($this->tab as $key=>$val) {
                if($val->getRating() > $newStudent->getRating()){
                    break;
                } else {
                    $indexCounter++;
                }
            }
            array_splice($this->tab, $indexCounter, 0, array($newStudent));

        } else {
            $this->tab[0] = $newStudent;
        }
        $this->studentNbr++;
    }

    public function getStudentByID($studentID){
        return $this->tab[$studentID];
    }

    public function rmStudentByID($studentID){
        unset($this->tab[$studentID]);
        $this->tab = array_values($this->tab);
        $this->studentNbr--;
    }

    public function printStudentTab(){
        print_r($this->tab);
    }
}