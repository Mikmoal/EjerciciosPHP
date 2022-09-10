<?php
	date_default_timezone_set("America/Mexico_City");
	//Se crea un array con datos fecha del sistema

	$hoy = getdate();
	$dmes = $hoy['mday'];
	$dsemana = $hoy['wday'];
	$mes = $hoy['mon'];
	$ao = $hoy['year'];
	$nombredia = "";
	print_r($hoy);
	echo "<br>";
	print ("Dia del mes ".$dmes."<br>");
	print ("Dia de la semana ".$dsemana."<br>");
	print ("Mes ".$mes."<br>");
	print ("Año ".$ao."<br>");
	switch ($dsemana) {
		case 1:
			$nombredia = "Lunes";
			break;
		case 2:
			$nombredia = "Martes";
			break;
	}
	switch ($mes) {
		case 1:
			$nombremes = "Enero";
			break;
		case 2:
			$nombremes = "Febrero";
			break;
		case 3:
			$nombremes = "Marzo";
			break;
		case 4:
			$nombremes = "Abril";
			break;
		case 5:
			$nombremes = "Mayo";
			break;
		case 6:
			$nombremes = "Junio";
			break;
		case 7:
			$nombremes = "Julio";
			break;
		case 8:
			$nombremes = "Agosto";
			break;
		case 9:
			$nombremes = "Septiembre";
			break;
	}
	print $nombredia." ".$mes." de ".$nombremes." de ".$ao;
?>