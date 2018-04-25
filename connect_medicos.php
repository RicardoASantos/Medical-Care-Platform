<?php require 'connection.php'; ?>

<?php
	
	$NO = $_POST['nome'];
	$ES = $_POST['especialidade'];
	$PRECO = $_POST['preco'];
	
	session_start();
	
	$clinica = $_SESSION["User"];
	$localizacao = $_SESSION["Local"];
				
	if ($conn -> connect_error){
		die ("Conection failed");
	}
	
	$sql = "INSERT INTO medicos (NomeMedico, Especialidade, Preco, Nome, LocalizacaoMed)VALUES('{$NO}', '{$ES}', '{$PRECO}', '{$clinica}', '{$localizacao}')";

	
	if ($conn->query($sql) === TRUE){
		header('Location: sucesso.php');
	} else {
		header('Location: erro.php');
	}
	
	echo $_SESSION["User"];

	$conn->close();	
	
?>