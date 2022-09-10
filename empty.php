<?php
	$var="Contenido";
	if (empty($var)) {
		echo "La variable SI está vacia, su contenido es: ".$var;
	}
	else {
		echo "La variable NO está vacia, su contenido es: ".$var;
	}
	echo "<br>";

	unset($var);

	if (empty($var)) {
		echo "La variable SI está vacia, su contenido es: ";
	} else {
		echo "La variable NO está vacia, su contenido es:";
	}

?>