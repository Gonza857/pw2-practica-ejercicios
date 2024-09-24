<?php
require_once("../ejercicio1/index.php");
require_once("../ejercicio2/index.php");
require_once("../ejercicio3/index.php");
require_once("../ejercicio4/index.php");
require_once("../ejercicio5/index.php");
require_once("../ejercicio6/saludar.php");

$parametro = "AMARILLO";

$a = 1;
$b = 2;

$t1 = "ABC";
$t2 = "123";

$numeros = [1, 2, 3, 4, 5];

$persona = new Saludar("Gonzalo", "Ramos");

$hour = 22;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main class="styledMain">
        <h1>Gonzalo Ramos</h1>
        <div class="ejerciciosWrapper">
            <div class="ejercicioCard">
                <h3>Ejercicio 1: Semáforo</h3>
                <p>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
                    “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
                    “avance” o “estado desconocido” ante un caso no esperado.</p>
                <p>Ejecuto el ejercicio 1 con variable <?= $parametro ?> y el resultado del mismo es <?= semaforo_a("amarillo") ?></p>
            </div>
            <div class="ejercicioCard">
                <h3>Ejercicio 2: Binomio cuadrado perfecto</h3>
                <p>
                    Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
                    recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)2</p>
                <p>Ejecuto el ejercicio 2 con variables <?= $a . " " . $b ?> y el resultado del mismo es <?= binomioCuadradoPerfecto_a(1, 2) ?></p>
            </div>
            <div class="ejercicioCard">
                <h3>Ejercicio 3: Concatenar textos</h3>
                <p>
                    Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
                    ambos textos concatenados como uno solo.</p>
                <p>Ejecuto el ejercicio 3 con variables <?= $t1 . " y " . $t2 ?> y el resultado del mismo es <?= concatenar($t1, $t2) ?></p>
            </div>
            <div class="ejercicioCard">
                <h3>Ejercicio 4: Incrementar</h3>
                <p>
                    Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
                    la función, el valor del parámetro haya sido incrementado en 1
                    (Ver pasaje de parámetros por referencia)</p>
                <p>Ejecuto el ejercicio 4 con variable <?= $a ?> y el resultado del mismo es <?php incrementar($a) ?><?= $a ?></p>
            </div>
            <div class="ejercicioCard">
                <h3>Ejercicio 5: Sumatoria</h3>
                <p>
                    Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
                    valores.</p>
                <p>Ejecuto el ejercicio 5 con variables <?= imprimir($numeros) ?> y el resultado del mismo es <?= sumatoria_a($numeros) ?></p>
            </div>
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
        </div>
    </main>
</body>

</html>

<style>
    body {
        margin: 0;
        padding: 0;
        text-decoration: none;
        box-sizing: border-box;
        list-style: none;
    }

    .styledMain {
        width: 100%;
        display: flex;
        flex-direction: column;
        border: 5px solid red;
    }

    .styledMain h1 {
        width: 100%;
        text-align: center;
    }

    .ejerciciosWrapper {
        display: flex;
        flex-direction: column;
        width: 80%;
        margin: 0 auto;
        border: 5px solid blueviolet;
        gap: 0.5rem;

    }

    .ejercicioCard {
        padding: 0.8rem;
        background-color: #c3c3c3;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .ejercicioCard p {
        margin: 0;
        padding: 0;
    }

    .ejercicioCard h3 {
        margin: 0;
        padding: 0;
    }
</style>