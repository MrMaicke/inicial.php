<?php
functionone
	echo "\033[2J\033[H";
	echo PHP_EOL . "Por favor digite sua nota." . PHP_EOL;
	$nota = fgets(STDIN);
	
	if (is_numeric($nota)) {
		echo "Nota digitada {$nota}" . PHP_EOL;
	} else {
		echo "Digite uma nota válida" . PHP_EOL;
	}
?>