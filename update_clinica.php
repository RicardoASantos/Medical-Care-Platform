<?php require 'connection.php'; ?>

<?php

	session_start();

	if (isset($_SESSION["User"])){
	}else{
		header('Location:login.php');
	}


?>
<?php
	//Ver apenas tabelas registadas pelo user
	$User = $_SESSION["User"];

	$result = $conn->query("select * from clinicas where Nome='$User'");

	$row = $result->fetch_array(MYSQLI_BOTH);

	$_SESSION["Nome"] = $row["Nome"];
	$_SESSION["NIF"] = $row["NIF"];
	$_SESSION["Localizacao"] = $row["Localizacao"];
	$_SESSION["Distrito"] = $row["Distrito"];
	$_SESSION["Logotipo"] = $row["Logotipo"];
	$_SESSION["Texto_Livre"] = $row["Texto_Livre"];
	$_SESSION["Email"] = $row["Email"];
	$_SESSION["Password"] = $row["Password"];


?>
<?php
	if(isset($_POST['Actualizar'])){

		$a_nome = $_POST['nome'];
		$a_NIF = $_POST['NIF'];
		$a_localizacao = $_POST['localizacao'];
		$a_distrito = $_POST['distrito'];
		$a_logotipo = $_POST['logotipo'];
		$a_texto = $_POST['texto'];
		$a_email = $_POST['email'];
		$a_password = $_POST['password'];

		$sql = $conn->query("UPDATE clinicas SET Nome = '{$a_nome}',NIF = '{$a_NIF}', Localizacao = '{$a_localizacao}', Distrito = '{$a_distrito}', Logotipo = '{$a_logotipo}', Texto_Livre = '{$a_texto}', Email = '{$a_email}', Password = '{$a_password}'");

		$sql2 = $conn->query("UPDATE user Email = '{$a_email}', Password = '{$a_password}'");

		header("Location: update_clinica.php");

	}
?>

<!doctype html>
<html><head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/backoffice.css" />

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

<script type="text/javascript" src="js/menu_mobile.js"></script>

<title>Registo</title>
</head>

<body>

	<nav>

        <figure>
        	<a href="index.html"><img src="img/logo1.jpg" alt="Logótipo All-In Saúde"></a>
        </figure>


        <div id="menu_mobile">

		<ul id="sec">
        	<li><a href="logout.php">Terminar Sessão</a></li>
            <li><a href="form_procedimento_novo.php">Nova Consulta</a></li>
        	<li><a href="procedimentos.php">Todas as Consultas</a></li>
        	<li><a href="medicos.php">Os Nossos Médicos</a></li>
        	<li><a href="update_clinica.php">A Minha Conta</a></li>


        </ul>

				<ul>
        	<div id="menu1">
                <li><a href="all_in_saude.html">All-In Saúde</a></li>
                <div class="dropdown">
                    <a href="all_in_saude.html#sobre"><p class="one">Sobre</p></a>
                    <a href="all_in_saude.html#para_quem"><p>Para Quem</p></a>
                    <a href="all_in_saude.html#vantagens"><p>Vantagens</p></a>
                    <a href="all_in_saude.html#como_aderir"><p>Como Aderir</p></a>
                    <a href="all_in_saude.html#como_utilizar"><p>Como Utilizar</p></a>
                    <a href="all_in_saude.html#valores"><p>Valores</p></a>
                    <a href="all_in_saude.html#formas_pagamento"><p>Formas de pagamento</p></a>
                </div>
            </div>
        	<li><a href="nossos_medicos.php">Nossos Médicos</a></li>
        	<li><a href="all_in_club.html">All-In Club</a></li>
            <div id="menu4">
                <li><a href="contacto.php">Apoio ao Membro</a></li>
                <div class="dropdown">
                    <a href="contacto.php"><p class="one">Contactos</p></a>
                    <a href="form_marcacao.php"><p>Pedido de Marcação</p></a>
                </div>
            </div>
        </ul>        
        </div>

        <div id="hamburguer">
        	<div class="barra"></div>
        	<div class="barra"></div>
        	<div class="barra"></div>

        </div>

    </nav>

    <header>

        <h1>Modificação dos dados da Clínica</h1>
        <?php
			echo "<h2>".$_SESSION["User"]."</h2>";
		?>

        <form action="" method="post">

                <fieldset>
                        <label>Nome:</label><input type="text" name="nome" value="<?php echo $_SESSION["Nome"]; ?>"/><br>
                </fieldset>
                <fieldset>
                        <label>NIF:</label><input type="text" name="NIF" value="<?php echo $_SESSION["NIF"]; ?>"/><br>
                </fieldset>
                <fieldset>
                        <label>Localização:</label><input type="text" name="localizacao" value="<?php echo $_SESSION["Localizacao"]; ?>"/><br>
                </fieldset>
                <fieldset>
                        <label>Distrito:</label><input type="text" name="distrito" value="<?php echo $_SESSION["Distrito"]; ?>"/><br>
                </fieldset>
                <fieldset>
                        <label>Logotipo:</label><input type="text" name="logotipo" value="<?php echo $_SESSION["Logotipo"]; ?>"/><br>
                </fieldset>
                <fieldset>
                        <label>Texto Livre:</label><textarea type="text" name="texto" value="<?php echo $_SESSION["Texto_Livre"]; ?>"></textarea><br>
                </fieldset>
                <fieldset>
                        <label>Email:</label><input type="email" name="email" value="<?php echo $_SESSION["Email"]; ?>"/><br>
                </fieldset>
                <fieldset>
                        <label>Password:</label> <input type="password" name="password" value="<?php echo $_SESSION["Password"]; ?>"/><br>
                </fieldset>

                <input name="Actualizar" type="submit" value="Actualizar" id="send"/>

			</form>

   </header>

	<footer>

			<div class="sect">
				<h1><strong>CONVERGÊNGIAS</strong> MÉDICAS</h1>
				<p>Frase que diga lo bueno de las convergencias y como va a mudar el sector de la salud en portugal.</p>
			</div>

			<div class="sect">
				<h1><strong>PRESTADORES</strong></h1>
				<a href="#">Seja Prestador</a>
				<a href="#">Apoio a Prestadores</a>
				<a href="#">Área do Prestador</a>
			</div>

			<div class="sect">
				<h1><strong>SIGA</strong>-NOS</h1>
				<p>Mantenha-se sempre informado, de todas as nossas novidades seguindo-nos por</p>
				<a href="#"><img src=""></a>
				<a href="#"><img src=""></a>
				<a href="#"><img src=""></a>
				<a href="#"><img src=""></a>
			</div>

			<div class="sect">
				<h1><strong>CONTACTE</strong>-NOS</h1>
				<p>Apoio ao Sócio</p><br>
 				<img src=""><p>21X XXX XXX</p><br>
				<img src=""><p>mail@dominio.com</p><br><br>
				<p>Novas Adesões</p><br>
			 <img src=""><p>21X XXX XXX</p>
			</div>

			<p>Copyright © 2015 Convergências Médicas</p>

			<div id="up">
				<img src="">
			</div>

    </footer>

</body>
</html>
