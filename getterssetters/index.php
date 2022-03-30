<?php
    //They are three in number: Private, Public and Static
    class Test {

        private $ourProperty_ne = "I am here";
        public $ourProperty_two = "I am here 3";

        function returnString(){//always public by default
            echo "I am here 2 ";
        }
        //getter
        function getPropertyOne(){
            return $this->ourProperty_ne;

        }
        //setter
        function setPropertyOne($value)
        {
            $this->ourProperty_ne = $value;
        }

    }

    //instatntiation
    $object = new Test();
    $object->setPropertyOne("how are you doing");
    $object->getPropertyOne();
    print_r($object);




?>

