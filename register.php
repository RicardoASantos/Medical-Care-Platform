<?php require 'connection.php'; ?>

<?php
	
	$NO = $_POST['nome'];
	$EM = $_POST['email'];
	$PW = $_POST['password'];
			
	if ($conn -> connect_error){
		die ("Conection failed");
	}
	
	$sql = "INSERT INTO user (Nome, Email, Password)Values('{$NO}', '{$EM}', '{$PW}')";
	
	if ($conn->query($sql) === TRUE){
		echo "Obrigado! Os dados foram introduzidos na base de dados!";
	} else {
		echo "Erro" . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();	
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registo</title>
</head>

<body>

	<h1>Registo</h1>

    <form action="" method="post">
        Nome: <input type="text" name="nome" id="nome" required/><br>
        Email: <input type="email" name="email" id="email" required/><br>
        Password: <input type="password" name="password" id="password" required/><br><br>
        <input type="submit" value="Registar" name="Registar"/>
    </form>

</body>
</html>