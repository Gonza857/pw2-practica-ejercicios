<?php

/* Ejercicio 1: Semáforo
Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
“amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
“avance” o “estado desconocido” ante un caso no esperado.
a) función semaforo_a($color): Resuelva la solución utilizando if else
b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
c) función semaforo_c($color): Resuelva la solución utilizando switch


*/

$parametro = "AMARILLO";

function semaforo_a(string $color): string
{
    $color = strtoupper($color);
    if ($color === "ROJO") {
        return "FRENE";
    } elseif ($color == "AMARILLO") {
        return "PRECAUCIÓN";
    } elseif ($color == "VERDE") {
        return "AVANCE";
    } else {
        return "ESTADO DESCONOCIDO";
    }
}

function semaforo_b(string $color): string
{
    $color = strtoupper($color);
    if ($color === "ROJO") return "FRENE";
    if ($color === "AMARILLO") return "PRECAUCIÓN";
    if ($color === "VERDE") return "AVANCE";
    return "ESTADO DESCONOCIDO";
}

function semaforo_c(string $color): string
{
    $color = strtoupper($color);
    switch ($color) {
        case "ROJO":
            return "FRENE";
        case "AMARILLO":
            return "PRECAUCIÓN";
        case "VERDE":
            return "AVANCE";
        default:
            return "ESTADO DESCONOCIDO";
    }
}

$color = isset($_GET["color"]) ? $_GET["color"] : "";

function extractGetParameter($param, $defaultValue = "")
{
    return isset($_GET[$param]) ? $_GET[$param] : $defaultValue;
}

function areParametersSetted()
{
    return isset($_GET["color"]);
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
        .mainStyle {
            display: flex;
            flex-direction: column;
            width: 100%;
            align-items: center;
        }
        .custom-select-multiple {
            height: fit-content;
            padding: 10px;
            border-radius: 8px;
            border: 2px solid #4a90e2;
            background-color: white;
            color: #333;
            outline: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .custom-select-multiple:hover {
            border-color: #357ab7;
        }

        .custom-select-multiple:focus {
            border-color: #357ab7;
            box-shadow: 0 0 5px rgba(53, 122, 183, 0.5);
        }

        .custom-select-multiple option {
            padding: 10px;
            background-color: #f9f9f9;
            border: 2px solid #4a90e2;
        }
    </style>
</head>
<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <div class="ejercicioCard">
        <h3>Ejercicio 1: Semáforo</h3>
        <p>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
            “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
            “avance” o “estado desconocido” ante un caso no esperado.</p>
    </div>
    <form class="formStyle" method="get">
        <label for="color">Color</label>
        <select name="color" required multiple class="custom-select-multiple">
            <option value="rojo">Rojo</option>
            <option value="amarillo">Amarillo</option>
            <option value="verde">Verde</option>
        </select>
        <button type="submit">Enviar</button>

    </form>
    <p><?= areParametersSetted() ?
            'Se ejecutó el ejercicio 1 con variable
            <strong>
                '  . strtoupper($color) . '
            </strong>
            y el resultado del mismo es
            <strong>
                ' . semaforo_a($color) . '
            </strong>'
            :
            ""
        ?></p>
    </p>
</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>

</body>

</html>
