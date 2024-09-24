<?php

$platos = isset($_POST["pasos"]) ? $_POST["pasos"] : null;
$menuIni = parse_ini_file("menu.ini");
$elegidos = [];
$showForm = false;
$error = "";

if ($platos == null) {
    $showForm = true;
    $error = "Selecciona al menos una opcion";
};
if ($platos != null) {
    foreach ($menuIni as $parteMenu => $valor) {
        foreach ($platos as $parteElegida) {
            if ($parteElegida == $parteMenu) {
                $elegidos[] = $parteElegida;
            }
        }
    }
}

if (isset($_POST['mostrarFormulario'])) {
    mostrarFormulario($showForm);
}
function mostrarFormulario(&$showForm)
{
    $showForm = true;
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

        .platosFormStyle {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 0.8rem;
            padding: 0.5rem;
            border-radius: 0.5rem;
            border: 1px solid #c3c3c3
        }

    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <div class="ejercicioCard">
        <h3>Ejercicio 13: ConociendINIs con el Menú no saludable</h3>
        <p>
            Mostrar en pantalla un formulario con checkbox que permita elegir más de un paso en el menú de
            hoy: Entrada, plato principal, acompañamiento y postre.
            Una vez enviado el formulario, lea el archivo menu.ini, y muestre en pantalla sólo los pasos del menú
            que solicitó el comensal:
            menu.ini
            entrada=Snacks
            plato_principal=Milanesa
            acompañamiento=Papas fritas
            postre=helado
        </p>
    </div>
    <?php if ($showForm): ?>
        <form class="platosFormStyle" method="post">
            <caption>Solicitud de platos</caption>
            <label>
                <input type="checkbox" value="entrada" name="pasos[]">
                Entrada
            </label>
            <label>
                <input type="checkbox" value="plato_principal" name="pasos[]">
                Plato Principal
            </label>
            <label>
                <input type="checkbox" value="acompanamiento" name="pasos[]">
                Acompañamiento
            </label>
            <label>
                <input type="checkbox" value="postre" name="pasos[]">
                Postre
            </label>
            <button type="submit">Enviar</button>
            <?= $error ?>
        </form>
    <?php else: ?>
        <h3>Elección</h3>
        <ul>
            <?php
            foreach ($elegidos as $parte) {
                echo '<li> - ' . $parte . '</li>';
            }
            ?>
        </ul>
        <form method="post">
            <input type="submit" name="mostrarFormulario" value="Mostrar formulario">
        </form>
    <?php endif; ?>
</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>
</body>

</html>