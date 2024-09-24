<?php

$directory = "../imagenes";
$images = scandir($directory);
$imagenBuscada = isset($_GET["src"]) ? $_GET["src"] : "";

foreach ($images as $img) {
    if ($img == $imagenBuscada) {
        $imagenBuscada = $img;
        break;
    }
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

        .styledImage {
            width: 200px;
            padding: 0.5rem;
            border-radius: 0.5rem;
            border: 1px solid #c3c3c3;
        }

        .imageLink {
            color: #003f54;
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .imageBox {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            text-align: center;
        }
    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <div class="imageBox">
        <img src="../imagenes/<?= $imagenBuscada ?>" alt="<?= $imagenBuscada ?>" class="styledImage">
        <p class="imageLink">"<?= $imagenBuscada ?>"</p>
    </div>
</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>
</body>

</html>
