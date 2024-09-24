<?php

$numeroAleatorio = random_int(1, 6);

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

    </style>
</head>

<body>
<?php include_once("../ejercicio8/header.php") ?>
<main class="mainStyle">
    <div class="ejercicioCard">
        <h3>Ejercicio 11: Lanzar dados</h3>
        <p>
            Realizar una web que permita indicar la cantidad de dados a lanzar (mediante input de tipo option) y al
            tocar un botón “lanzar dados” pase a una segunda pantalla donde muestre los dados lanzados como imagen y la
            suma de sus valores como puntaje obtenido.</p>
    </div>
    <form class="styledDadosInput" action="resultado.php">
        <select name="dados" required class="styledSelectDados">
            <option selected>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
        </select>
        <button type="submit">Tirar dados</button>
    </form>



</main>
<?php include_once("../ejercicio8/footer.html") ?>

<?php ?>
</body>

</html>