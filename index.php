<?php
	$nome = "Gustavo";
	$idade = 13;
	$cidade = "Osasco";

	$cadastro = (object) [
		"nome" => "Gustavo",		
		"idade" => 14,		
		"cidade" => "Osasco"		
	];
---------------
	$nome = "Esaú";
	$idade = 27;
	$cidade = "São Paulo";
	
	echo "<pre>";
	echo "Oi meu nome é <b>{$nome}</b>, tenho <b>{$idade}</b> anos, moro em <b>{$cidade}</b>, terra da Garoa.\n\n";
	echo "</pre>";
---------------------
	echo "<pre>";

	// TEXTO DIRETO
	echo "Oi meu nome é <b>{$cadastro->nome}</b>, tenho <b>{$cadastro->idade}</b>, moro em <b>{$cadastro->cidade}</b>, terra do hotdog";

	echo "</p>";

	// PULANDO LINHA
	echo "Oi meu nome é <b>{$nome}</b>"
	. ", tenho <b>{$idade}</b>, moro em"
	. " <b>{$cidade}</b>, terra do hotdog";

	echo "</pre>";
---------------
	$x = 10;
	$y = 5;

	$soma = ($x + $y);
	$sub = ($x - $y);
	$mult = ($x * $y);
	$div = ($x / $y);

	$ativo = ($div > 2 ? true : false);
------------------
	echo "<pre>";
	echo "<p>";
	
	echo "O resultado da soma de <b>{$x}</b> + <b>{$y}</b> é <b>{$soma}</b>.";
	echo "</br>O resultado da subtração de <b>{$x}</b> - <b>{$y}</b> é <b>{$sub}</b>.";
	echo "</br>O resultado da multiplicação de <b>{$x}</b> * <b>{$y}</b> é <b>{$mult}</b>.";
	echo "</br>O resultado da divisão de <b>{$x}</b> / <b>{$y}</b> é <b>{$div}</b>.";
	echo "</br>O resultado é " . ($ativo ? "<b>ativo</b>" : "<b>inativo</b>");

	//$palmeiras = 51;
	if ($palmeiras)
		echo $palmeiras;

	echo "</br>O palmeiras " . (isset($palmeiras) ? "tem mundial" : "não tem mundial");

	echo "</p>";
	echo "</pre>";
----------------
?>