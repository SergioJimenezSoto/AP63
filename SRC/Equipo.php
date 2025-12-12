<?php
class Team {
    protected  $nombre;
    protected $dorsal;
    protected $salario;
    protected $edad;
    function __construct($nombre,$dorsal,$salario,$edad){
        $this->nombre = $nombre;
        $this->dorsal = $dorsal;
        $this->altura = $salario;
        $this->edad = $edad;
    }
}
