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
            
            
            /*
             *This is a contsructor to create a new car
             *@param make,model,description,price,regNumber,regyear
             *@return
             */
            public function __construct ($make , $model , $description , $price, $regNumber, $regYear){
                
                $this->make = $make;
                $this->model = $model;
                $this->description = $description;
                $this->price = $price;
                $this->regNumber = $regNumber;
                $this->regYear = $regYear;                
            }
            
            /*
             *This is getter method for getting the make
             *@param
             *@return $this->make
             */
            public function getMake(){
                return $this->make;
            }
            
            
            /*
             *This is getter method for getting the model
             *@param 
             *@return $this->model
             */
            public function getModel(){
                return $this->model;
            }
            
            /*
             *This is getter method for getting the description of the car
             *@param 
             *@return $this->description
             */
            public function getDescription(){
                return $this->description;
            }
            
            /*
             *This is getter method for getting the price of the car
             *@param 
             *@return $this->price
             */
            public function getPrice(){
                return $this->price;
            }
            
            /*
             *This is getter method for getting the regNumber
             *@param 
             *@return $this->regNumber
             */
            public function getRegNumber(){
                return $this->regNumber;
            }
            
            /*
             *This is getter method for getting the regYear
             *@param 
             *@return $this->regYear
             */
            public function getRegYear(){
                return $this->regYear;
            }
            
            /*
             *This is getter method to calculate the car's age
             *@param 
             *@return car age
             */
            public function getCarAge(){
                
                $todayYear = date("Y");
                $age = $todayYear - (int)$this->getRegYear();
                
                return $todayYear - (int)$this->getRegYear();
                
            }

    
    }

?>