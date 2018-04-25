<?php require 'connection.php'; ?>

<?php

	
	$NO = $_POST['nome'];
	$NS = $_POST['num_socio'];
	$ES = $_POST['especialidade'];
	$MEDICO = $_POST['medico'];
	$TEXTO = $_POST['texto'];
	$PRECO = $_POST['preco'];
	
	session_start();
	
	$clinica = $_SESSION["User"];	
				
	if ($conn -> connect_error){
		die ("Conection failed");
	}
	
	$sql = "INSERT INTO procedimentos (NomeSocio, NumSocio, Especialidade, Medico, CampoTexto, Preco, Nome)VALUES('{$NO}', '{$NS}', '{$ES}', '{$MEDICO}', '{$TEXTO}', '{$PRECO}', '{$clinica}')";

	
	if ($conn->query($sql) === TRUE){
		header('Location: sucesso.php');
	} else {
		header('Location: erro.php');
	}
	
	$conn->close();	
	
?>