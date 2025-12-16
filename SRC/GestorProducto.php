<?php
    class GestorProducto {
        private $array = [];
        function Crear($nuevoIntegrante) {
            $this ->array[] = $nuevoIntegrante;
        }
        function GetElem(){
            return $this -> array;
        }
        function BuscarID($id) {
            foreach ($this->array as $key) {
                if ($key->getID() == $id) {
                    return $key;
                }   
            }
        return null;
        }

        function setDorsal($nombre,$nuevoDorsal) {
            foreach ($this->array as $key) {
                if ($key->getNombre() == $nombre) {
                    $key->setDorsal($nuevoDorsal);
                    return $key;
                }   
            }
        return null;
        }

        function Eliminar($id) {
            foreach ($this->array as $index => $key) {
                if ($key->getID() == $id) {
                    unset ($this ->array[$index]);
                    $this->array = array_values($this->array);
                    return true;
                }   
            }
        return false;
        }
}
