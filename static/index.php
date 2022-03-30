<?php
    //They are three in number: Private, Public and Static
    class Test {

        public $property1;
        public $property2;

        function __construct($value1)
        {//always public by default
            $this->property1 = $value1;
            $this->setPropertyValue('property22');
        }
        protected function setPropertyValue($value){
            $this->property2 = $value;
        }
    }

    //instantiation
    $object = new Test('spartan');
    echo $object->property2;
?>
