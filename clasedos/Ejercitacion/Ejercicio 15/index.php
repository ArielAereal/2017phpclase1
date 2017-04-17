<?php

include "figurageometrica.php";

include "triangulo.php";

$tria = new triangulo(4,4);
echo('<pre>');
var_dump($tria);
echo('</pre>');

echo "<br> <br>" . $tria->ToString() . "";


?>