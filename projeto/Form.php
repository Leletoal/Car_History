<?php
    class   Form{
        public static function alert($tipo,$mensagem){
        if ($tipo == 'erro') {
            echo '<div style ="background ="black"">'.$mensagem.'    </div>';
            
        }else if($tipo == 'sucesso'){
            
        }
    }
    }
?>