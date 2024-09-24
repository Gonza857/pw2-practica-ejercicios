<?php

$archivo = json_encode($_FILES);
$directory = "../imagenes";
$images = scandir($directory);

$imagen = isset($_FILES["archivo-imagen"]);
$nombreImage = $_POST["nombre-imagen"] ?? "";

if (
    isset($_FILES["archivo-imagen"])
    &&
    $_FILES["archivo-imagen"]["size"] > 0
    &&
    $_FILES["archivo-imagen"]["error"] == 0
    //&&
    //$_FILES["archivo-imagen"]["type"] != "image\/jpeg"
    && isset($_POST["nombre-imagen"])
) {
    $extension = pathinfo($_FILES['archivo-imagen']['name'], PATHINFO_EXTENSION);
    move_uploaded_file(
            $_FILES["archivo-imagen"]["tmp_name"],
            $directory . "/" . $nombreImage . "." . $extension);
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
        .formStyle {
            display: flex;
            flex-direction: column;
            width: fit-content;
            padding: 1rem;
            border-radius: 1rem;
            border: 1px solid #cecece;
            gap: 0.5rem;
        }

        .formStyle > textarea {
            resize: none;
            min-height: 100px;
        }

        .mainStyle {
            display: flex;
            flex-direction: column;
            width: 100%;
            align-items: center;
        }

        .styledImage {
            height: 100px;
        }

        .imageContainer {
            display: flex;
            width: 70%;
            gap: 0.5rem
        }
        .imageBox {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <div class="ejercicioCard">
        <h3>Ejercicio 9: Insta-gramo</h3>
        <p>
            Realizar una web que muestre todas las imágenes que contiene en la carpeta “/imagenes” con su
            respectivo nombre de archivo como pié de imagen. Al final de dicha web debe haber un formulario
            que permita subir una imagen con un nombre a designar.</p>

    </div>
    <form class="formStyle" method="post" enctype="multipart/form-data">
        <input name="nombre-imagen" type="text" placeholder="Inserte nombre de la imagén">
        <input name="archivo-imagen" type="file">
        <button type="submit">Enviar</button>
    </form>
</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>
</body>

</html>
