<?php

//llamar al modelo
    require_once "Models/usuarios_model.php";
    $user = new usuarios_model();
    $datos = $user->get_usuarios();

// llamada a la vista
    require_once "View/usuarios_views.php";













?>