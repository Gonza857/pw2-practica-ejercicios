<?php
$directory = "../imagenes";
$images = scandir($directory);

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

        .linksBox {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
        }

        .imageLink {
            color: #003f54;
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <div class="ejercicioCard">
        <h3>Ejercicio 10: Insta-reciclado (para cuidar el medio ambiente):
        </h3>
        <p>
            Reutilizando el ejercicio anterior, realizar una web que liste todos los nombres de imagenes que contiene en
            la carpeta /imagenes cómo link, que al hacer clic, lleve a una segunda pantalla donde efectivamente se
            muestre dicha imagen.</p>
    </div>
    <div class="linksBox">
        <?php foreach ($images as $img) {
            if ($img != "." && $img != "..") {
                echo '
                <a class="imageLink" href="ver-imagen.php?src=' . $img . '">"' . $img . '"</a>
            ';
            }
        }
        ?>
    </div>

</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>
</body>

</html>