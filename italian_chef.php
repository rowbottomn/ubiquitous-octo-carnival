<?php
    class ItalianChef extends Chef{

        protected $countryOfOrigin;

        public function __getCountry($countryOfOrigin) {
            return $this->$countryOfOrigin;
        }

        public function __setCountry($countryOfOrigin, $value) {
            $this->$countryOfOrigin = $value;
        }


        function __construct($name, $age, $country) {
            $this->countryOfOrigin = $country;
            $this->age = $age;
            $this->name = $name;
        }


        function makePasta(){
            echo "<p>the chef makes pasta</p><br>";
        }

        function makeSpecialDish(){
            echo "<p>the chef makes chicken parm</p><br>";            
        }

    }

?>