<?php
    require_once 'Invitado.php';    
    
    class Index{
        function main() {
            $invitados = array(new Invitado("Larry"), new Invitado("Christian"), new Invitado("Roger"),new Invitado("Killer!"));
            $vasoenvenenado = $invitados[3]->envenenarVaso(4);
            $vaso = new Vaso(sizeof($invitados));
            $vasosinenvenenado = 0;
            $this->asesinos2HTML($invitados, $vasoenvenenado, $vaso, $vasosinenvenenado);
        }
        
        function asesinos2HTML($invitados, $vasoenvenenado, $vaso, $vasosinenvenenado){
            require_once 'vista.html';
        }

        
    }
    $index = new Index();
    $index->main();    

?>

