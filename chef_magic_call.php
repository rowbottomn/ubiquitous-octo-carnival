<?php
    class Chef_magic_call {

        protected $name; //common name not to be confused with $name
        protected $age;

        function __construct() {
            $this->cName = "John Doe";
            $this->age = "30";    
        }

        //this is to use for no parameter constructor 
        private function new($values) {
            $obj = new Chef_magic_call();
            if (isset($values['name'])){
                $obj->name = $values['name'];
            }
            if (isset($values['age'])){
                $obj->age = $values['age'];
            }    
            return $obj;
        }   

        function __call($method, $args){
            if ($name == makeChicken){
                makeChicken();

                echo var_dump($args);
            }

        }

        private function makeChicken(){
            echo "<p>$cName makes chicken</p><br>";
        }

        private function makeSalad(){
            echo "<p>the chef makes salad</p><br>";
        }

        private function makeSpecialDish(){
            echo "<p>the chef makes BBQ ribs</p><br>";
        }
    }

?>