<?php
    //properties = variables

    //methods = functions
    //class is blueprint,pattern or object factory
    class Test {

        public $ourProperty = "I am here";

        public function returnString(){
            echo "I am here";
        }


    }

    //instatntiation
    $object = new Test();
    return $object->returnString();

?>