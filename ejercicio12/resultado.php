<?php

$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : false;
$planeta = (isset
    ($_POST["planeta"]) && $_POST["planeta"] != "otro")
    ?
    $_POST["planeta"]
    :
    (isset($_POST["planeta_manual"])
        ? $_POST["planeta_manual"]
        :
        false);



$visitas = [];
if (file_exists("datos.json")) {
    $contenido = file_get_contents("datos.json");
    $visitas = json_decode($contenido, true) ?? [];
}
$numeroDeVisitasNoTierra = 0;
foreach ($visitas as $key => $value) {
    if ($value["planeta"] != "tierra") {
        $numeroDeVisitasNoTierra++;
    }
}

if (gettype($planeta) != "boolean" && gettype($nombre) != "boolean") {
    $visita = ["nombre" => $nombre, "planeta" => $planeta];
    $visitas[] = $visita;
    file_put_contents("datos.json", json_encode($visitas, JSON_PRETTY_PRINT));
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
        table {
            border-collapse: collapse;
            width: 60%;
            font-size: 18px;
            text-align: left;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #3498db;
            color: white;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <a href="index.php"><button>Volver</button></a>
    <h3> Visitas que no son de la tierra: <?= $numeroDeVisitasNoTierra ?></h3>
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Planeta</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($visitas as $v): ?>
            <tr>
                <td><?= $v['nombre']; ?></td>
                <td><?= $v['planeta']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>
</body>

</html>
