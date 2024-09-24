<?php

$directory = "./dados";
$images = scandir($directory);

function getImageUsingDadoNumber($text)
{
    global $images;
    $param = 'dado' . $text . '.png';
    foreach ($images as $image) {
        if ($image != "." && $image != "..") {
            if ($image == $param) {
                return $image;
            }
        }
    }
    return false;
}

$cantidadDeDados = isset($_GET["dados"]) ? $_GET["dados"] : 0;
$actual = 0;
$resultado = [];
$sumaDeDados = 0;
while ($actual < $cantidadDeDados) {
    $numeroAleatorio = random_int(1, 6);
    $resultado[] = $numeroAleatorio;
    $sumaDeDados += $numeroAleatorio;
    $actual++;
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

        .styledDadoImage {
            width: 100px;
            height: 100px;
        }

        .dadosContainer {
            width: 70%;
            height: fit-content;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .dadosContainer p {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <h3>Ejercicio 11: Lanzar dados - Resultado</h3>
    <div class="dadosContainer">
        <?php foreach ($resultado as $valor): ?>
            <img alt="Dado <?= $valor ?>" class="styledDadoImage" src="./dados/<?= getImageUsingDadoNumber($valor) ?>">
            <p><?= $valor !== end($resultado) ? " + " : ""; ?></p>
        <?php endforeach; ?>
    </div>
    <p>La suma de todos los dados es de
        <strong>
            <?= $sumaDeDados ?>
        </strong>
    </p>
    <a href="index.php">
        <button>Volver</button>
    </a>
</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>
</body>

</html>