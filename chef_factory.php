<?php

class ChefFactory{
    
    static function create($name, $age){
        $obj = new Chef();
        $obj->age = $age;
        $obj->name = $name;
        return $obj;
    }

    static function default(){
        $obj = new Chef();
        $obj->age = 30;
        $obj->name = "No name given";
        return $obj;
    }
}

?>