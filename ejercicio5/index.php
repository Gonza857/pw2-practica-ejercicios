<?php
/* Ejercicio 5: Sumatoria
Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
valores.
a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while
*/

function sumatoria_a(array $array): float
{
    $counter = 0;
    for ($i = 0; $i < sizeof($array); $i++) {
        $counter += $array[$i];
    }
    return $counter;
}

function sumatoria_b(array $array): float
{
    $counter = 0;
    foreach ($array as $numero) {
        $counter += $numero;
    }
    return $counter;
}

function sumatoria_c(array $array): float
{
    $i = 0;
    $counter = 0;
    while ($i < sizeof($array)) {
        $counter += $array[$i];
        $i++;
    }

    return $counter;
}

function imprimir(array $array): string
{
    $result =  "";
    for ($i = 0; $i < sizeof($array); $i++) {
        if ($i == 0) {
            $result .= $array[$i];
        } else {
            $result .= ", " . $array[$i];
        }
    }
    return $result;
}

$numeros = [1, 2, 3, 4, 5];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../ejercicio8/style.css" rel="stylesheet" />

    <title>Document</title>
</head>

<body>
    <?php include_once("../ejercicio8/header.php") ?>
    <main>
        <div class="ejercicioCard">
            <h3>Ejercicio 5: Sumatoria</h3>
            <p>
                Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
                valores.</p>
            <p>Ejecuto el ejercicio 5 con variables <?= imprimir($numeros) ?> y el resultado del mismo es <?= sumatoria_a($numeros) ?></p>
        </div>
    </main>
    <?php include_once("../ejercicio8/footer.html") ?>

    <?php ?>
</body>

</html>