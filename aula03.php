<?php
	echo PHP_EOL . "Digite sua idade: ";
	$idade = trim(fgets(STDIN));
	
	if ($idade >= 18) {
		echo PHP_EOL . "Sua idade é: {$idade} e você é maior de idade!";
	} else {
		echo PHP_EOL . "Sua idade é: {$idade} e você é menor de idade!";
	}
?>
