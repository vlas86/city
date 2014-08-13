<?php
namespace Vlas\Phpden;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Street{
    public $street_square;
    public $houses_count;
    public $count_full_summ;
    public $long_street;
    public $buildings_arr;
    public $cleaner;
    const  CLEANER=1000;

    
    
    public function __construct() {
        $this->street_square=rand(1,10);
        $this->houses_count=rand(10, 30);
        $this->long_street= rand(100, 1000);
        $this->buildings_arr;//=array();
        $this->count_full_summ;
        //$this->cleaner=2;
        $this->cleaners_count();
        $this->street_name();
        $this->show_payment_count();
        $this->show_payment_all();
     
        
        
    }
    public function street_name(){
        $name=array("Харьковских Дивизий","Халтурина","Тобольская","Героев сталинграда","Танкопия");
        return $str= $name[array_rand($name, 1)];
        
    }
    
    
    public function show_payment_count(){
        for ($i=0; $i<=$this->houses_count; $i++){
            $this->buildings_arr[$i] = new house();
        }
        return $this->buildings_arr;
    }
    
    public function showArrayBuilding(){
                  var_dump ($this ->buildings_arr)."<br>";
        }
    public function show_payment_all(){
         $this->count_full_summ=0;
        for ($i=0; $i<$this->houses_count; $i++){
            $this->count_full_summ +=$this->buildings_arr[$i]->payHouse();
        }
        return  $this->count_full_summ;
        
    }
    
    public function cleaners_count() {
        $cleaners =$this->houses_count*$this->cleaner;
        return $cleaners;
    }
     
    public function showCleanerSum(){
        $result=0;
        for($i=0; $i<$this->houses_count; $i++){
            $result+=$this->buildings_arr[$i]->square;
        }
        echo "Количество дворников на район: ".round($result/self::CLEANER)."<br>"; 
        
    }
    public function show_street(){
        echo "<h4>Информация об улицах!</h4>";
        echo "Название улицы: ".$this->street_name()."<br>";
        echo "Количество домов: ".$this->houses_count."<br>";        
        echo "Общая стоимость по квартплате с улицы составляет: ". $this->show_payment_all()."<br>";
        
//        echo "Длинна улицы: ".$this->long_street."<br>";
       
        
    }
}

