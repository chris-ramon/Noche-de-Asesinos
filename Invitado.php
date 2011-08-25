<?php
require_once 'Vaso.php';

class Invitado {
    private $_nombre;
    
    public function __construct($nombre) {
        $this->_nombre = $nombre;
    }
    
    public function getNombre() {
        return $this->_nombre;
    }
    
    public function beberVaso($numVaso,$vasoenvenenado) {
        if($numVaso == $vasoenvenenado){
            return "Tomando vaso envenenado!, pronto morira!";
        }
        else
        {
            return "Tomando vaso sin veneno!";
        }
    }
    
    public function envenenarVaso($numVasos) {
        $max = new Vaso($numVasos);
        $min = 2;
        $envenenado = rand($min, $max->getNumVasos());
        return $envenenado;
    }
}

?>
