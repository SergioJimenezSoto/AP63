<?php
class DC extends Equipo {
    function __construct($nombre,$dorsal,$salario,$edad){
        parent::__construct($nombre,$dorsal,$salario,$edad);
    }
    function getID(){
            return $this->dorsal;
    }
    function getNombre(){
            return $this->nombre;
    }
    function setDorsal($nuevoDorsal){
        $this->dorsal = $nuevoDorsal;
    }
}