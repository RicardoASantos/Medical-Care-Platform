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

	$result = $conn->query("select * from procedimentos where Nome='$User'");

	$row = $result->fetch_array(MYSQLI_BOTH);

	$_SESSION["NomeSocio"] = $row["NomeSocio"];
	$_SESSION["NumSocio"] = $row["NumSocio"];
	$_SESSION["Especialidade"] = $row["Especialidade"];
	$_SESSION["Medico"] = $row["Medico"];
	$_SESSION["Preco"] = $row["Preco"];
	$_SESSION["CampoTexto"] = $row["CampoTexto"];


?>
<?php
	if(isset($_POST['Actualizar'])){

		$a_nome = $_POST['nome'];
		$a_NumSocio = $_POST['num_socio'];
		$a_especialidade = $_POST['especialidade'];
		$a_medico = $_POST['medico'];
		$a_preco = $_POST['preco'];
		$a_texto = $_POST['texto'];

		$sql = $conn->query("UPDATE procedimentos SET NomeSocio = '{$a_nome}',NumSocio = '{$a_NumSocio}', Especialidade = '{$a_especialidade}', Medico = '{$a_medico}', Preco = '{$a_preco}', CampoTexto = '{$a_texto}'");

		header("Location: update_procedimento.php");
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/backoffice.css" />

<title>Modificação Consultas</title>
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

        <h1>Modificação dos dados das Consultas</h1>
        <?php
			echo "<h2>".$_SESSION["User"]."</h2>";
		?>

        <form action="" method="post">
            <fieldset>
               <label> Nome do Sócio:</label> <input type="text" name="nome" id="nome" value="<?php echo $_SESSION["NomeSocio"]; ?>"/>
            </fieldset>
            <fieldset>
                <label>Número de Sócio:</label> <input type="text" name="num_socio" id="num_socio"  value="<?php echo $_SESSION["NumSocio"]; ?>"/>
            </fieldset>
            <fieldset>
                <label>Especialidade:</label> <input type="text" name="especialidade" id="especialidade" value="<?php echo $_SESSION["Especialidade"]; ?>"/>
            </fieldset>
            <fieldset>
                <label>Médico:</label> <input type="text" name="medico" id="medico" value="<?php echo $_SESSION["Medico"]; ?>"/>
            </fieldset>
            <fieldset>
                <label>Preço:</label> <input type="text" name="preco" id="preco" value="<?php echo $_SESSION["Preco"]; ?>"/>
            </fieldset>
            <fieldset>
            <label>Outras informações:</label> <textarea type="text" name="texto" id="texto" value="<?php echo $_SESSION["CampoTexto"]; ?>"></textarea><br>
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
