<?php
    class Chef_magic {

        protected $name; //common name not to be confused with $name
        protected $age;

        //note that this works for all 
        public function __get($var_name) {
            return $this->$var_name;
        }

        public function __set($var_name, $value) {
            $this->$var_name = $value;
        }


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