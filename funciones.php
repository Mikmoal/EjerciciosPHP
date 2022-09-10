<?php
function verTexto($cadena) {
	echo "<strong>Estoy usando una función para mostrar : </strong>";
	echo $cadena;
}
verTexto("Hola compañero de PHP " . "<br>");

function operaciones($nUno, $nDos, $operacion) {
	$resultado = 0;
	if($operacion == "Sumar") {
		$resultado = $nUno + $nDos;
	} elseif ($operacion == "Restar") {
		$resultado = $nUno - $nDos;
	} elseif ($operacion == "Multiplicar") {
		$resultado = $nUno * $nDos;
	}
	return $operacion."  ".$resultado;
}
$r = operaciones(5,7,"Sumar");
echo $r . "<br>";
echo operaciones(15,8,"Restar") . "<br>";
echo operaciones(4,8,"Multiplicar");
?>