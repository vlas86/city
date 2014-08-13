<?php
namespace Vlas\Phpden;
class house{
    public $floor_count;
    public $porsh_count;
    public $house_number;
    public $flats_count;
    public $flats_mass;
    public $flats_mass_count;
    public $lamp;
    public $count_el_sum;
    public $square;
    public $pay_square;
   
    
    
    function __construct() {
        $this->porsh_count=rand(1, 4);
        $this->house_number=rand(1, 10);
        $this->flats_count=4;
        $this->floor_count=rand(5, 10);
        $this->lamp=100;          
        $this->flats_mass=array();
        $this->flats_mass_count;
        $this->GetArrFlat();
        $this->square=rand(100, 500);
        $this->pay_square=150;
        $this->sum_flats();
        $this->payHouse();
        #$this->electricity_sum();
    }
    function get_Count_flats(){
        echo "<h4>Информация о доме!</h4>";
        //echo "Количество квартир: ".$this->flats_count."<br>";
        return $this->flats_count;   
    }
   
    public function GetArrFlat(){
        $num=$this->porsh_count*$this->floor_count*$this->flats_count;
        for($i=0; $i<$num; $i++ ){
            $this->flats_mass[$i] = new flats();            
        }
        return $this->flats_mass;
    }
    public function payHouse(){
       $numFlat=$this->porsh_count*$this->floor_count*$this->flats_count;
       for($i=0; $i<$numFlat; $i++){
         $this->flats_mass_count += $this->flats_mass[$i]->full_payment();
       }
       
       return $this->flats_mass_count;
       
    }
    public function electricity_sum(){
       $count_el_sum=$this->porsh_count*$this->floor_count*$this->lamp;
       echo "Объём потребляемого электричества: ".$count_el_sum."<br>";        
        
    }
    public function sum_pay_square(){
        $sum_pay_square=  $this->square*$this->pay_square;
        echo "Плата за площадь дома: ".$sum_pay_square."<br>";
        
    }
    public function sum_flats(){
        $sum=$this->flats_count*$this->floor_count*$this->porsh_count;
        return $sum;
    }

    public function house_info(){
        echo "Количество подъездов: ".$this->porsh_count."<br>";
        echo "Количество этажей: ".$this->floor_count."<br>";
        echo "Количество квартир:  ".$this->sum_flats()."<br>";
        
        
    }
    public function payHouseResult(){
		echo "Общая стоимость коммунальных услуг со всего дома составляет: ".$this->flats_mass_count."<br>";
		
		
	}    
    }
    
    
        
        

    
    
   
