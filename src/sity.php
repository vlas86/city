<?php
namespace Vlas\Phpden;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class sity{
    public $name;
    public $year;
    public $coordinats;
    public $arrStreetValue;
    public $num_street;
    public $nation;
    public $sumCount;       


    public function __construct() {
        $this->coordinats= rand(0,180).".".rand(0,59).".".rand(0,59)."E ".rand(0,180).".".rand(0,59).".".rand(0,59)."N";       
        $this->num_street=  rand(1, 5);
        $this->sity_name();
        $this->arrStreet();
        $this->peopleCount();
        $this->getCountSum();
    }
    
    
    public function sity_name(){
        
        $name=  array("Forest", "Griffin", "Ales", "Mors", "Hoper");
    
        return $str=$name[array_rand($name, 1)];
    }
    
    public function arrStreet(){
       $this -> arrStreetValue = array();
        for ($i=0; $i<=$this->num_street; $i++){
            $this -> arrStreetValue[$i] = new Street();
        }
       return $this -> arrStreetValue;
    }
    
    public function peopleCount(){
        foreach ($this -> arrStreetValue as $value_a){
            foreach ($value_a->buildings_arr as $value_b){
                foreach ($value_b->flats_mass as $value_c){
                    $this->nation += $value_c->housemates;
                }
            }
        }
        return $this->nation;
    }
    
    public function getCountSum(){
        foreach ($this->arrStreetValue as $valueA){
            foreach($valueA->buildings_arr as $valueB){
                $this->sumCount += $valueB->square;
            }
        }
        return $this->sumCount;
    }

        public function show_sity(){
        
        echo "<h4>Информация об улицах!</h4>";
        echo "Название улицы: ".$this->sity_name()."<br>";
        echo "Количество прописанных: ".$this->nation."<br>";
        echo "Координаты города: ".$this->coordinats."<br>";
        echo "Аренданая плата за землю со всего города: ".$this->getCountSum();
    }
    
    
    
}
