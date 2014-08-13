<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
namespace Vlas\Phpden;

    class flats{
        public $heat=10.03;
        public $gas=2.03;
        public $coldWater=5.00;
        public $hotWater=13.00;
        public $rent=15.00;
        public $electricity=5.00; 
        
        public $room;
        public $square;
        public $floor;
        public $housemates;
        public $gallery;
        public $gallery_number;
        public $heating;
        
        public $room_coast;
        public $square_count;
        public $floor_count;
        //public $number_of_housemates;
        public $gallery_square;
        public $gallery_number_count;
        public $type_heating;
        public $getFullPayment; 
        public $newVar;
        
        
        function __construct(){
            $this->square_count = rand(30, 65);
            $this->floor_count = rand(5, 9);
            $this->housemates=rand(2, 5);
            $this->gallery_square=rand(2, 5);
            $this->gallery_number_count=rand(1, 2);
            $this->square_heating=rand(30, 60);
            $this->room_coast=array();
            $this->get_payment();
            $this->full_payment();
            
        } 
//        function heat_Count_pay(){
//            $this->heat;
//            $this->square_count;
//            echo "Плата за отопление составляет: ".$this->heat*$this->square_count."грн.<br>";
//        }
//        
//        function rent_Count_pay(){
//            $this->square_count;
//            $this->rent;
//            echo "Плата за аренду составляет: ".$this->square_count*$this->rent."грн.<br>";
//            
//        }
//        function coldWater_pay(){
//            $this->coldWater;
//            $this->square_count;
//            echo "Плата за холоднуюводу составляет: ".$this->coldWater*$this->square_count."грн.<br>";
//            
//        }
//        function hotWater_Count_pay() {
//            $this->hotWater;
//            $this->square_count;
//            echo "Плата за горячую воду составляет: ".$this->hotWater*$this->square_count."грн.<br>";
//        }
//        function electricity_Count_pay(){
//            $this->electricity;
//            $this->square_count;
//            echo "Плата за электричество составляет: ".$this->electricity*$this->square_count."грн.<br>";
//            
//        }
//        
        function get_payment(){
           $this->room_coast=array("Плата за отопление составляет:"=>$this->heat*$this->square_count,
                        "Плата за аренду составляет:"=>$this->square_count*$this->rent,
                        "Плата за холоднуюводу составляет:"=>$this->coldWater*$this->square_count,
                        "Плата за горячую воду составляет: "=>$this->hotWater*$this->square_count,
                        "Плата за электричество составляет:"=>$this->electricity*$this->square_count
               );
               return $this->room_coast; 
        }
        
        public function getFullPayment(){
        	foreach ($this->room_coast as $key=>$value)
        		{
        			echo $key, $value."<br>";
        		}
        }
        public function full_payment(){
            
                foreach ($this->room_coast as $key=>$value)
                        {
                    $this->newVar +=$this->room_coast[$key];
                }

                //echo $this->newVar;
          return ($this->newVar);    
        }
        
        public function get_payment_values(){  
	           
                   
                echo "Общая сумма: ".$this->newVar."<br>";
	//return $this->getFullPayment;    
        }
       
          
    }

