<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo  </title>
</head>
<body>

<h1>Lista de Usuarios</h1>

    <?php
    // 
    // Esta es la vista donde se recorre con el ciclo foreach la consulta del metodo llamada get_usuarios();
        foreach ($datos as $dato){

            echo $dato["nombre"]." ";
            echo $dato["apellido"]."<br/>";
        }
    ?>
    
</body>
</html>