<?php

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

        .styledRegistroInput {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
            border-radius: 1rem;
            border: 1px solid #c3c3c3;
        }
        .styledRegistroInput > div {
            display: flex;
            flex-direction: column;
        }

    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <div class="ejercicioCard">
        <h3>Ejercicio 12: Contador de visitas… extraterrestres</h3>
        <p>
            Crear una web que permita ingresar en un formulario, los datos de ingreso a nuestro planeta:
            nombre del visitante y planeta perteneciente (mediante un combo).
            Una vez enviado el formulario, muestra una segunda página que liste todos los visitantes que
            cruzaron este control interplanetario, y un contador del total de visitas, que no pertenecen al
            planeta Tierra.
        </p>
        <a href="resultado.php"><button>Ver visitas registradas</button></a>
    </div>
    <form class="styledRegistroInput" action="resultado.php" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input name="nombre" placeholder="Inserte su nombre" required>
        </div>
        <div>
            <label for="planeta">Planeta</label>
            <select name="planeta" class="styledSelectDados">
                <option selected value="tierra">Tierra</option>
                <option value="pluton">Plutón</option>
                <option value="saturno">Saturno</option>
                <option value="otro">Otro... (espeficicar abajo)</option>
            </select>
        </div>
        <div>
            <label for="planeta_manual">Si su planeta no esta en la lista</label>
            <input name="planeta_manual" placeholder="Inserte su planeta si no esta en el listado">
        </div>
        <button type="submit">Registrar</button>
    </form>


</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>
</body>

</html>