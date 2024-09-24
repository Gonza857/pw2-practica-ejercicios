<?php
/* Ejercicio 4: Incrementar
Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
la función, el valor del parámetro haya sido incrementado en 1
(Ver pasaje de parámetros por referencia)
*/

function incrementar(float &$var)
{
    $var++;
}

$a = 1;


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
            <h3>Ejercicio 4: Incrementar</h3>
            <p>
                Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
                la función, el valor del parámetro haya sido incrementado en 1
                (Ver pasaje de parámetros por referencia)</p>
            <p>Ejecuto el ejercicio 4 con variable <?= $a ?> y el resultado del mismo es <?php incrementar($a) ?><?= $a ?></p>
        </div>
    </main>
    <?php include_once("../ejercicio8/footer.html") ?>

    <?php ?>
</body>

</html>