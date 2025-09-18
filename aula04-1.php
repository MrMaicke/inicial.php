<?php

	$logincorreto = "adm";

	$loginDigitado;

	function limparTela(): void {

	echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J';

	}


	echo "Digite seu login:";

	$loginDigitado = trim(fgets (STDIN));


	do {

    limparTela();

    echo "Digite seu login: ";

    $loginDigitado = trim(fgets(STDIN));
 
    if ($loginDigitado !== $logincorreto) {

        echo "\n-== Tente novamente ==-\n\n";

        sleep(1); 

    }
 
} while ($loginDigitado !== $logincorreto);
 
echo "Login concedido\n";


 
 
?>
 