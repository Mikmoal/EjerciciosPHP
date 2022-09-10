<?php
	function foperaciones($x,$y,$z)
	{
		switch ($z) {
			case '+':
				$r = $x + $y;
				break;
			case '-':
				$r = $x - $y;
				break;
			case '*':
				$r = $x * $y;
				break;
			case '/':
				$r = $x / $y;
				break;
			default:
				$r = "Error de operación";
				break;
		}
		return($r);
	}
?>