<?php
	$servidor = "127.0.0.1";
	$usuario = "root";
	//$senha = "";//AMBIENTE DE PRODUÇÃO
	$senha = "root";//AMBIENTE DE DESENVOLVIMENTO
	$dbname = "cadastro_geral";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		echo "ERROR: 1";
	}else{
			//echo "Conexao realizada com sucesso";
	}
	
	?>
