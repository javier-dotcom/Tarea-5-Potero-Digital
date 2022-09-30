<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea N°5</title>
</head>

<body>
    <header>

        <h1>Tarea N°5
        </h1>
        <h2>Programación: Backend Developer <br>Potrero Digital</h2>

        <h3>Matrices</h3>
    </header>

    <h4>EJERCICIOS</h4>
    <h4>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.
    </h4>
    <?php
    for ($a = 2; $a <= 20; $a += 2) {
        $array[$a] = $a;
    }
    foreach ($array as $num) {
        echo $num . "<br>";
    }
    ?>
    <h4>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
        matriz. Mostrar el esquema del array con print_r().
    </h4>
    <?php
    $array = ["Pedro", "Ana", 34, 1];
    print_r($array);
    ?>

    <h4>3. Crear un array asociativo e introducir los siguientes valores:
        <ul>
            <li> Nombre: Pedro
            </li>
            <li>
                Apellido: Torres

            </li>
            <li>
                Dirección: Av. Mayor 3703

            </li>
            <li>
                Teléfono: 1122334455
            </li>
        </ul>
    </h4>
    <?php
    $array = [
        "Nombre" => "Pedro ",
        "Apellido" => "Torres",
        "Dirección" => "Av. Mayor 3703",
        "Teléfono" => "112233445"
    ];
    foreach ($array as $a => $b) {
        echo $a . " : " . $b . "<br>";
    }
    ?>
    <h4>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
        Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
        Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid</h4>

    <?php
    $array = [
        "Madrid", "Barcelona", "Londres", " New York", "Los Ángeles",
        "  Chicago"
    ];
    for ($a = 0; $a <= count($array) - 1; $a++) {
        echo "La ciudad con indice " . $a . " tiene el nombre " . $array[$a] . "<br>";
    }
    ?>

    <h4>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
        LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
        Ejemplo: El índice de Madrid es MD.</h4>

    <?php

    $array = [ "Madrid", "Barcelona", "Londres", " New York", "Los Ángeles", "Chicago"];
    $indice = ["MD", "BCL", "LD", "NY", "LA", "CCG"];
    for ($a = 0; $a <= count($array) - 1; $a++) {
        echo "El indice de  " . $array[$a] . " es " . $indice[$a] . "<br>";
    }
    ?>

</body>

</html>