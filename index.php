<?php
	$nome = "Marcelo";
	$idade = 24;
	$cidade = "São Paulo";
	
	echo "<pre>";
	echo "Oi meu nome é <b>{$nome}</b>, tenho <b>{$idade}</b>, moro em <b>{$cidade}</b>, terra da Garota.\n\n";
	echo "</pre>";
	
	$x = 10;
	$y = 5;
	
	$soma = ($x + $y);
	$sub = ($x - $y);
	$mult = ($x * $y);
	$div = ($x / $y);
	
	echo "<pre>";
	echo "<p>";
	
	echo "O resultado da soma de <b>{$x} + {$y}</b> é <b>{$soma}</b><br>\n";
	echo "O resultado da subtração de <b>{$x} - {$y}</b> é <b>{$sub}</b><br>\n";
	echo "O resultado da multiplicação de <b>{$x} X {$y}</b> é <b>{$mult}</b><br>\n";
	echo "O resultado da divisão de <b>{$x} / {$y}</b> é <b>{$div}</b><br>\n";
	
	echo "</p>";
	echo "</pre>";
?>