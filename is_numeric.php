<?php 
	$pruebas = array(
		"42",
		1337,
		0x539,
		0b10100111001,
		02471,
		1337e0,
		"no numérico",
		9.1
	);

	foreach ($pruebas as $element) {
		if(is_numeric($element)) {
			echo "'{$element}' es numérico", PHP_EOL;
			echo "<br>";
		} else {
			echo "'{$element}' NO es numérico", PHP_EOL;
			echo "<br>";
		}
	}


?>