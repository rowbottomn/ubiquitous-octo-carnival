<?php
    class ItalianChef extends Chef{

        protected $countryOfOrigin;


        function __construct($name, $age, $country) {
            $this->countryOfOrigin = $country;
            $this->age = $age;
            $this->name = $name;
            echo "whatever."
        }


        function makePasta(){
            echo "<p>the chef makes pasta</p><br>";
        }



        function makeSpecialDish(){
            echo "<p>the chef makes chicken parm</p><br>";            
        }

        function makeOldSpecialDish(){
            $this::makeSpecialDish();//note this calls the overridden method
        }

        function makeOldSpecialDish2(){
            parent::makeSpecialDish();
        }

    }

?>