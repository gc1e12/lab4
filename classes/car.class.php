<?php

/*
This class create a car object.
*/


    class Car{
    
            private $make; // car manufacturer
            private $model; // car model
            private $description; // description about this car
            private $price; // how much the car cost
            private $regNumber;//manufacture code?
            private $regYear;//regYear? manufacture year?
            
            
            
            public function __construct ($make , $model , $description , $price, $regNumber, $regYear){
                
                $this->make = $make;
                $this->model = $model;
                $this->description = $description;
                $this->price = $price;
                $this->regNumber = $regNumber;
                $this->regYear = $regYear;                
            }
            
            public function getMake(){
                return $this->make;
            }
            
            public function getModel(){
                return $this->model;
            }
            
            public function getDescription(){
                return $this->description;
            }
            
            public function getPrice(){
                return $this->price;
            }
            
            public function getRegNumber(){
                return $this->regNumber;
            }
            
            public function getRegYear(){
                return $this->regYear;
            }
            
            public function getCarAge(){
                
                $todayYear = date("Y");
                $age = $todayYear - (int)$this->getRegYear();
                
                return $todayYear - (int)$this->getRegYear();
                
            }

    
    }

?>