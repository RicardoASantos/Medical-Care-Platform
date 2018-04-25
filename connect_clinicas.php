<?php require 'connection.php'; ?>

<?php
	
	$nome = $_POST['nome'];
	$NIF = $_POST['NIF'];
	$localizacao = $_POST['localizacao'];
	$distrito = $_POST['distrito'];
	$logotipo = $_POST['logotipo'];
	$texto = $_POST['texto'];
	$tipo = $_POST['tipo'];
	$email = $_POST['email'];
	$password = $_POST['password'];
			
	if ($conn -> connect_error){
		die ("Conection failed");
	}
	
	$sql = "INSERT INTO clinicas (Nome, NIF, Localizacao, Distrito, Logotipo, Texto_Livre, Tipo, Email, Password) VALUES ('$nome', '$NIF', '$localizacao', '$distrito', '$logotipo', '$texto', '$tipo', '$email', '$password')";

	$sql2 = "INSERT INTO user (Nome, Email, Password)Values('$nome', '$email', '$password')";

	
	if ($conn->query($sql) === TRUE){
		echo "Obrigado! Os dados foram introduzidos na base de dados!";
	} else {
		echo "Erro" . $sql . "<br>" . $conn->error;
	}
	
	if ($conn->query($sql2) === TRUE){
		header('Location: sucesso.php');
	} else {
		header('Location: erro.php');
	}	
	
	$conn->close();	
	
?>