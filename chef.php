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
        public function __getAge($age) {
            return $this->$age;
        }

        public function __setAge($age, $value) {
            $this->$age = $value;
        }

        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;    
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