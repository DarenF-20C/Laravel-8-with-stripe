<?php
//Parent Class
    class Car{

        public $Modal = "";
        public $Engine = "";

        public function setModel($newval)
            {
            $this->Model = $newval;
            }

        public function setEngine($newval)
            {
            $this->Engine = $newval;
            }

        public function getModel()
            {
            return "Car Model is ".$this->Model . "<br />";
            }

        public function getEngine()
            {
            return "Car Engine is ".$this->Engine . "<br />";
            }
    }

//Compact class is the subclass of Car class
    class Compact extends Car
    {
        private $Seat = "0";
        
        public function setSeat($newval)
            {
            $this->Seat = $newval;
            }
        
        public function getSeat()
            {
            return "Number of seats is ".$this->Seat . "<br />";
            }
    }
    
    
//MPV class is the subclass of Car class
    class MPV extends Car
    {
        private $minSeat = "0";
        private $maxSeat = "0";
        
        public function setSeat($min,$max)
            {
            $this->minSeat = $min;
            $this->maxSeat = $max;
            }
        
        public function getSeat()
            {
            return "Number of seats is between ".$this->minSeat . " and " .$this->maxSeat . "<br />";
            }
    }

//Create a new car Object 
    $car1 = new Compact;
    $car1->setModel("Saga");
    $car1->setEngine("1300CC");
    $car1->setSeat("5");
    echo $car1->getModel();
    echo $car1->getEngine();
    echo $car1->getSeat();
    echo "<br />";

    $car2 = new Compact;
    $car2->setModel("Axia");
    $car2->setEngine("100CC");
    $car2->setSeat("5");
    echo $car2->getModel();
    echo $car2->getEngine();
    echo $car2->getSeat();
    echo "<br /><br />";

    $car3 = new MPV;
    $car3->setModel("WISH");
    $car3->setEngine("1800CC");
    $car3->setSeat(5,8);
    echo $car3->getModel();
    echo $car3->getEngine();
    echo $car3->getSeat();
    echo "<br />";


?>