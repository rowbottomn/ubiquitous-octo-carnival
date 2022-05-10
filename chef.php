<?php
    class Chef{

        $staticAttribute =  "Italian Cooking";

        protected $name;
        public function __get($name) {
            return $this->$name;
        }
        protected $age;
        public function __get($age) {
            return $this->$age;
        }

        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;    
        }

        public function makeChicken(){
            echo “<p>the chef makes chicken</p><br>”;
        }

        public function makeSalad(){
            echo “<p>the chef makes salad</p><br>”;
        }

        public function makeSpecialDish(){
            echo “<p>the chef makes BBQ ribs</p><br>”;
        }
    }

?>