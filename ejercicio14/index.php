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
        .styledMatrixForm {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
            border-radius: 1rem;
            border: 1px solid #c3c3c3;
        }
        .styledMatrixForm > label{
            display: flex;
            flex-direction: column;
        }

    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <div class="ejercicioCard">
        <h3>Ejercicio 14: La Matrix… digo, Matriz</h3>
        <p>
            Solicite mediante un formulario, la dimensión de una matriz cuadrada.
            En la siguiente página, cree esa matriz de NxN y realice las siguientes acciones:
            a) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
            diagonal principal (1,12,23,etc)
            b) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
            diagonal secundaria (10,19,28,etc)
            c) Recorra la matriz (Ahora si con 2 for) y sume todos los valores que contiene. Muestre el
            resultado

        </p>
    </div>
    <form method="post" class="styledMatrixForm" action="resultado.php">
        <label for="columnas">
            Columnas
            <input type="text" placeholder="Introduza cantidad de columnas" name="columnas">
        </label>
        <label for="filas">
            Filas
            <input type="text" placeholder="Introduza cantidad de filas" name="filas">
        </label>
        <button type="submit">Crear matriz</button>
    </form>
</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>
</body>

</html>
