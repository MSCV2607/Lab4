<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Asi se declara una variable en PHP, el nombre puede iniciar con casi cualquier caracter excepto numeros.
    $edad = 25; 
    $nombre = "Juan"; 
    $altura = 1.84; 
    $mayorEdad = true;

    // Ahora puedes usar las variables
    echo "Edad: $edad <br>"; 
    echo "Nombre: $nombre <br>";
    echo "Altura: $altura <br>";
    echo "Mayor de edad: " . ($mayorEdad ? "Sí" : "No") . "<br>";
    ?>


    <p>
        <!-- Otra forma de imprimir variables -->
        <?= $edad ?>
    </p>


<p>------------------------------------------------------------------------------</p>

    <?php 
    $localidad = "Bs As"; //Variable local
    $propietario = 'Juan';
    global $propietario; //Hace que la variable propietario sea global

    //Para definir constantes
    define('PI', 3.1416);
    echo PI;

    //Otra manera de definir una constante
    const IVA = 0.21;
    echo "<br> La constante de IVA es:";
    echo IVA;


    
    ?>

<p>------------------------------------------------------------------------------</p>

    <?php 
    //Concadenacion
    $texto1 = "Hola";
    $texto2 = "Mundo";

    echo $texto1 . " " . $texto2 . "<br>";
    
    ?>

<p>------------------------------------------------------------------------------</p>

<?php
$resultado = 8+2;
echo "El resultado es: $resultado <br>";
?>

</body>
</html>
