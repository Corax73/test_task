<?php

abstract class animal{
    
    static $id = 0;
    // номера животных будут в объектах
    public $animalId; 
    //выход продукции
    public abstract function getOutputProduct();
}


class chicken extends animal{
    
    function __construct() {
        
        $this->animalId=parent::$id++;
        
    }
    
    public function getOutputProduct(){
        return rand(0,1);
    }

}


class cow extends animal{
    
    function __construct() {
        
        $this->animalId=parent::$id++;
        
    }

    
    public function getOutputProduct(){
        return rand(8, 12);
    }
}


class AnimalBreeding
{
    
    public function addСhicken(): chicken
    {
        return new chicken;
    }
    
    public function addCow(): cow
    {
        return new cow;
    }
}
?>