<?php
class MCO extends Equipo {
    function __construct($nombre,$dorsal,$salario,$edad){
        parent::__construct($nombre,$dorsal,$salario,$edad);
    }
    function getDorsal(){
        return $this->dorsal;
    }
    function getNombre(){
            return $this->nombre;
    }
        function setDorsal($nuevoDorsal){
        $this->dorsal = $nuevoDorsal;
    }
}