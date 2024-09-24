<?php

/* Ejercicio 2: Binomio cuadrado perfecto
Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)2
a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
potencia
b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
desarrollada del binomio: a2 + 2*a*b + b2
*/


function binomioCuadradoPerfecto_a($a, $b)
{
    if ($a == 0 && $b == 0) return "Completa los campos";
    return (($a + $b) * ($a + $b));
}

function binomioCuadradoPerfecto_b($a, $b)
{
    if ($a == 0 && $b == 0) return "Completa los campos";
    return (pow($a, 2) + 2 * $a * $b + pow($b, 2));
}

$a = isset($_GET["a"]) ? (int)$_GET["a"] : "";
$b = isset($_GET["b"]) ? (int)$_GET["b"] : "";

function extractGetParameter($param, $defaultValue = "")
{
    return isset($_GET[$param]) ? $_GET[$param] : $defaultValue;
}

function areParametersSetted(&$a, &$b)
{
    return isset($_GET["a"]) && isset($_GET["b"]);
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

        .inputStyle {
            padding: 0.5rem;
            border-radius: 1rem;
        }

        .mainStyle {
            display: flex;
            flex-direction: column;
            width: 70%;
            margin: auto;
            margin-top: 7rem;
            align-items: center;
        }

        footer {
            width: 100%;
            height: 5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <h3>Ejercicio 2: Binomio cuadrado perfecto</h3>
    <p>
        Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
        recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)2</p>
    <form class="formStyle" method="get">
        <input type="number" placeholder="Inserte a" name="a" class="inputStyle" required/>
        <input type="number" placeholder="Inserte b" name="b" class="inputStyle" required/>
        <button type="submit">Enviar</button>
    </form>
    <p>
        <?= areParametersSetted($a, $b) ?
            "Ejecuto con parámetro <strong>a = "
            . extractGetParameter("a", 0)
            . "</strong> y con <strong>b = "
            . extractGetParameter("b", 0)
            . "</strong> y el resultado es <strong>"
            . binomioCuadradoPerfecto_a($a, $b)
            . "</strong>"
            :
            "Inserta los parametros para obtener los resultados" ?>
    </p>
</main>
<?php include_once("../ejercicio8/footer.html") ?>
</body>

</html>