<?php
$columnas = isset($_POST['columnas']) ? number_format($_POST['columnas']) : 0;
$filas = isset($_POST['filas']) ? number_format($_POST['filas']) : 0;

$miMatriz = [];
$sumatoriaTotal = 0;
for ($i = 0; $i < $filas; $i++) {  // Filas
    for ($j = 0; $j < $columnas; $j++) {  // Columnas
        $miMatriz[$i][$j] = rand(0, 9);
        $sumatoriaTotal += $miMatriz[$i][$j];
    }
}

$sumaDiagonal = 0;
$sumaDiagonalSecundaria = 0;
$indicador = 0;
for ($i = 0; $i < sizeof($miMatriz); $i++) {
    $sumaDiagonal += $miMatriz[$indicador][$indicador];
    $indicador++;
}
$indicador = 0;
for ($i = 0; $i < sizeof($miMatriz); $i++) {
    $sumaDiagonalSecundaria += $miMatriz[$indicador][sizeof($miMatriz) - 1 - $indicador];
    $indicador++;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../ejercicio8/style.css" rel="stylesheet"/>

    <title>Document</title>
    <style>
        .mainStyle {
            display: flex;
            flex-direction: column;
            width: 100%;
            align-items: center;
        }
        .matrizContainer {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            width: fit-content;
        }
        .matrizRow {
            width: fit-content;
            display: flex;
            flex-wrap: wrap;
        }
        .matrizItem {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30px;
            height: 30px;
            border: 0.5px solid #cecece;
            margin: 0;
            padding: 0.5rem;
        }
    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">

    <div class="ejercicioCard">
        <h3>Ejercicio 14: La Matrix… digo, Matriz - Resultado</h3>
    </div>
    <div>
        <p>Columnas: <?= $columnas ?></p>
        <p>Filas: <?= $filas ?></p>
        <p>Suma de diagonal primaria: <?= $sumaDiagonal ?></p>
        <p>Suma de diagonal secundaria: <?= $sumaDiagonalSecundaria ?></p>
        <p>Suma total de la matriz: <?= $sumatoriaTotal ?></p>
        <h3>Matriz:</h3>
        <div class="matrizContainer">
            <?php

            for ($i = 0; $i < sizeof($miMatriz); $i++) {
                echo "<div class='matrizRow'>";
                for ($j = 0; $j < sizeof($miMatriz[$i]); $j++) {
                    echo '<p class="matrizItem">' . $miMatriz[$i][$j] . "</p>";
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>
</body>

</html>
