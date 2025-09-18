<?php
	limpaTela();
	echo "-== Digite um Número, Por Favor==-\n\n";
	function limpaTela(): void {
		echo chr(27). chr(91). 'H'. chr(27). chr(91). 'J';
	}
	$numero = trim(fgets(STDIN));
	
	while(!is_numeric($numero)){
		limpaTela();
		echo "-== DIGITE UM NÚMERO VÁLIDO, POR FAVOR ==-\n\n";
		$numero = trim(fgets(STDIN));
	}
	function menu(){
		echo "==========\n\n";
		echo "	 MENU	\n\n";
		echo "==========\n\n";
		echo "0 - Checar Impar/par\n";
		echo "1 - Sair\n\n";
	}
	menu();
	$sucesso = false;
	$opcao = trim(fgets(STDIN));
	while(!$sucesso){
		switch($opcao){
			case 0:
				echo "O Número {?numero} é " . ((int) (número % 2) == 0 ? "par" : "impar")."\n\n";
				$sucesso = true;
				break;
			case 1:
				$sucesso = true;
				break;
			default:
				limpaTela();
				echo "-== DIGITE UM NÚMERO VÁLIDO, POR FAVOR ==-\n\n";
				menu();
				$opcao = trim(fgets(STDIN));
				break
		}
	}	
?>