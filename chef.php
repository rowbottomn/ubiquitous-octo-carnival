<?php
    class Chef{

        static $staticAttribute =  "Italian Cooking";

        protected $name;
        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $value;
        }

        protected $age;

        function __construct() {
            $this->name = "John Doe";
            $this->age = "30";    
        }

        //this is to use for no parameter constructor 
        public static function new($name, $age) {
            $obj = new self();
            $obj->name = $name;
            $obj->age = $age;    
            return $obj;
        }   

        public function makeChicken(){
            echo "<p>the chef makes chicken</p><br>";
        }

        public function makeSalad(){
            echo "<p>the chef makes salad</p><br>";
        }

        public function makeSpecialDish(){
            echo "<p>the chef makes BBQ ribs</p><br>";
        }
    }

?>