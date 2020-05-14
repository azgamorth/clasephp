<?php

include_once("conexion.php");


    class usuarios_model{

// se declaran las variables privadas
        private $db;
        private $usuarios;

        // se arega un constructor

        public function __construct(){

            //traemos el metodo de la clase conectar en el archivo conexion;
            //la instanciamos

            $this->db=Conectar::conecta();
            $this->usuarios = array();

        }


        //se crea un metodo para nos devuelva la consulta de la tabla usuarios

        public function get_usuarios(){

             $consulta = $this -> db -> query("SELECT * FROM usuarios");
                while($filas = $consulta -> fetch_assoc()) {
                    $this->usuarios[] = $filas;
                }

        return $this->usuarios;

        }
    }

    ?>

    <div class=""></div>
    
     