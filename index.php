<?php
require_once("ejercicio1/index.php");
require_once("ejercicio2/index.php");
require_once("ejercicio3/index.php");
require_once("ejercicio4/index.php");
require_once("ejercicio5/index.php");
require_once("ejercicio6/index.php");
require_once("ejercicio6/saludar.php");


$parametro = "AMARILLO";

$a = 1;
$b = 2;

$t1 = "ABC";
$t2 = "123";

$numeros = [1, 2, 3, 4, 5];

$persona = new Saludar("Gonzalo", "Ramos");

?>

<h1>Ejercicio 1</h1>
<?= semaforo_a($parametro) ?>
</br>
<?= semaforo_b($parametro) ?>
</br>
<?= semaforo_c($parametro) ?>
<hr>
<h1>Ejercicio 2</h1>
<?= binomioCuadradoPerfecto_a($a, $b) ?>
</br>
<?= binomioCuadradoPerfecto_b($a, $b) ?>
<hr>
<h1>Ejercicio 3</h1>
<?= concatenar($t1, $t2) ?>
<hr>
<h1>Ejercicio 4</h1>
<p>Original: <?= $a ?></p>
<?php incrementar($a) ?>
<p>Incrementado: <?= $a ?></p>
<hr>
<h1>Ejercicio 5</h1>
<p>La suma de numeros del array es de: <?= sumatoria_a($numeros) ?>
<p>La suma de numeros del array es de: <?= sumatoria_b($numeros) ?>
<p>La suma de numeros del array es de: <?= sumatoria_c($numeros) ?>
</p>
<hr>
<h1>Ejercicio 6</h1>
<p>Saludo formal: <?= $persona->saludarFormal(1) ?>
<p>Saludo informal: <?= $persona->saludarInformal(1) ?>
</p>
<hr>