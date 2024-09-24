<?php

/*Ejercicio 3: Concatenar textos
Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
ambos textos concatenados como uno solo.
*/

function concatenar(string $text1, string $text2): string
{
    return $text1 . $text2;
}

$texto1 = extractGetParameter("texto1", "");
$texto2 = extractGetParameter("texto2", "");

function extractGetParameter($param, $defaultValue = "")
{
    return isset($_GET[$param]) ? $_GET[$param] : $defaultValue;
}

function areParametersSetted()
{
    return isset($_GET["texto1"]) && isset($_GET["texto2"]);
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
            width: 200px;
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
    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <div class="ejercicioCard">
        <h3>Ejercicio 3: Concatenar textos</h3>
        <p>
            Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
            ambos textos concatenados como uno solo.</p>

    </div>
    <form class="formStyle" method="get">
        <textarea name="texto1" placeholder="Inserte texto 1" required></textarea>
        <textarea name="texto2" placeholder="Inserte texto 2" required></textarea>
        <button type="submit">Enviar</button>
    </form>
    <p> <?= areParametersSetted() ?
        'Ejecuto el ejercicio 3 con variables "' . $texto1 . '" y "' . $texto2 .
        '" y el resultado es "' . concatenar($texto1, $texto2) . '"'
        :
        ""
        ?>
     </p>
</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>
</body>

</html>