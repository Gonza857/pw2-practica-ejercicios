<?php
/*Ejercicio 6: Nombre completo
Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
persona.
Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
concatenado al nombre un prefijo dependiendo del horario:
05hs a 13hs “Buenos días”
13hs a 21hs “Buenas tardes”
21hs a 05hs “Buenas noches”
Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
perteneciente al horario .
Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
“¡Hola Ezequiel! Que tengas un buen día” 

*/

include_once("./saludar.php");
$persona = new Saludar("Gonzalo", "Ramos");
$hour = 22;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../ejercicio8/style.css" rel="stylesheet" />

    <title>Document</title>
</head>

<body>
    <?php include_once("../ejercicio8/header.php") ?>
    <main>
        <div class="ejercicioCard">
            <h3>Ejercicio 6: Nombre completo</h3>
            <p>
                Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
                persona.
                Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
                concatenado al nombre un prefijo dependiendo del horario:
                05hs a 13hs “Buenos días”
                13hs a 21hs “Buenas tardes”
                21hs a 05hs “Buenas noches”</p>
            <p>Ejecuto el ejercicio 6 con variable <strong>
                    <?= "Gonzalo Ramos y " . $hour ?>
                </strong> y el resultado del mismo es <strong>
                    <?= $persona->saludarFormal($hour) ?>
                    </br> &
                    <?= $persona->saludarInformal($hour) ?>
                </strong>
            </p>
        </div>
    </main>
    <?php include_once("../ejercicio8/footer.html") ?>

    <?php ?>
</body>

</html>