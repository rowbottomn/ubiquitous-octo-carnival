<?php
    class Chef_helper {

        static $staticAttribute =  "Italian Cooking";

        protected $name; //common name not to be confused with $name
        protected $age;

        //use the no parameter constructor for default values
        function __construct() {
            $this->name = "John Doe";
            $this->age = "30";    
        }

        //use this static function set the values instead of constructor 
        public static function new($name, $age) {
            $obj = new self();
            $obj->name = $name;
            $obj->age = $age;    
            return $obj;
        }   
        
    }

?>