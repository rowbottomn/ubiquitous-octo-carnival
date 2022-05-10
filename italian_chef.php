<?php
    class ItalianChef extends Chef{

        protected $countryOfOrigin;

        public function __get($countryOfOrigin) {
            return $this->$countryOfOrigin;
        }

        function __construct($name, $age, $country) {
            $this->countryOfOrigin = $country;
            $this->age = $age;
            $this->name = $name;

        }
    }

?>