<?php

$frase = "Jon Lima é o mar brabo do role.";

$palavra = "brabo";

$q = strpos($frase, "brabo");

var_dump($q);

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

?>