    <?php

//Se definen los parametros para la conexion a la base de datos
    class Conectar{

            public static function conecta(){

                $conecta = new mysqli("localhost","root","","trabajo");
                $conecta ->query("SET NAMES 'utf-8'");
                return $conecta;    
            }

    }

?>