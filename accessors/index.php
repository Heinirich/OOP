<?php
    //They are three in number: Private, Public and Static
    class Test {

        private $ourProperty_ne = "I am here";
        public $ourProperty_two = "I am here 3";

        function returnString(){//always public by default
            echo "I am here 2 ";
        }


    }

    //instatntiation
    $object = new Test();
    //$object->$ourProperty_two;

    //change value
    $object->$ourProperty_ne = "hi";
    print_r($object);





?>
