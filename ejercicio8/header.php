<?php
$ejercicios = [
    "Ejercicio 1" => "../ejercicio1/index.php",
    "Ejercicio 2" => "../ejercicio2/index.php",
    "Ejercicio 3" => "../ejercicio3/index.php",
    "Ejercicio 4" => "../ejercicio4/index.php",
    "Ejercicio 5" => "../ejercicio5/index.php",
    "Ejercicio 6" => "../ejercicio6/index.php",
    "Ejercicio 9" => "../ejercicio9/index.php",
    "Ejercicio 10" => "../ejercicio10/index.php",
    "Ejercicio 11" => "../ejercicio11/index.php",
    "Ejercicio 12" => "../ejercicio12/index.php",
    "Ejercicio 13" => "../ejercicio13/index.php",
    "Ejercicio 14" => "../ejercicio14/index.php",
    ];

$ejerciciosLength = count($ejercicios);
?>

<header>
    <h1>Gonzalo Ramos</h1>
    <ul class="menuListContainer">
        <?php
        $contador = 0;
        foreach ($ejercicios as $item => $value) :
            $contador++;
        ?>
            <li>
                <a href="<?= $value ?>"><?= $item ?></a>
                <?php if ($contador < $ejerciciosLength): ?>
                    |
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</header>