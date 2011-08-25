<?php
require_once 'Invitado.php';

class Vaso {
    private $_numVasos;
        
    public function __construct($numVasos) {
        $this->_numVasos = $numVasos;
    }
    
       
    public function getNumVasos() {
        return $this->_numVasos;
    }


    public function reducirNumero() {
        $this->_numVasos = $this->_numVasos-1;
    }
}

?>
