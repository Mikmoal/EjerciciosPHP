<?php
	include_once "operaciones.php";
	$valor1 = $_POST['a'];
	$valor2 = $_POST['b'];
	$valor3 = $_POST['c'];
	if (($valor1=="") or ($valor2=="") or ($valor3=="")) {
		echo ("hay datos vacios");
	}
	elseif (is_numeric($valor1) and is_numeric($valor2)) {
		echo "El resultado es: ". foperaciones($valor1,$valor2,$valor3);
	}
	else {
		echo ("Valores no numéricos");
	}
?>