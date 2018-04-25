<?php require 'connection.php'; ?>

<?php

	session_start();

	if (isset($_SESSION["User"])){
	}else{
		header('Location:login.php');
	}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/backoffice.css" />

<title>Formulário Registo Nova Clinica</title>
</head>

<body>

    <nav>

        <figure>
        	<a href="index.html"><img src="img/logo1.jpg" alt="Logótipo All-In Saúde"></a>
        </figure>

		<ul id="sec">
        	<li><a href="logout.php">Terminar Sessão</a></li>
            <li><a href="form_procedimento_novo.php">Nova Consulta</a></li>
        	<li><a href="clinicas.php">Todas as Consultas</a></li>
        	<li><a href="medicos.php">Os Nossos Médicos</a></li>
        	<li><a href="update.php">A Minha Conta</a></li>


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
    </nav>

    <header>

    	<h1>Registo de Nova Clínica</h1>

        <form action="connect_clinicas.php" method="post">

                <fieldset>
                        <label>Nome:</label><input type="text" name="nome" required/><br>
                </fieldset>
                <fieldset>
                        <label>NIF:</label><input type="text" name="NIF" required/><br>
                </fieldset>
                <fieldset>
                        <label>Localização:</label><input type="text" name="localizacao" required/><br>
                </fieldset>
                <fieldset>
                        <label>Distrito:</label><input type="text" name="distrito" required/><br>
                </fieldset>
                <fieldset>
                        <label>Logotipo:</label><input type="text" name="logotipo" required/><br>
                </fieldset>
                <fieldset>
                        <label>Texto Livre:</label><textarea type="text" name="texto"></textarea><br>
                </fieldset>
                <fieldset>
                        <label>Médico</label><input type="radio" name="tipo" value="Medico" class="radio" checked><br>
                </fieldset>
                <fieldset>
                        <label>Veterinário</label><input type="radio" name="tipo" class="radio" value="Veterinario"><br><br>
                </fieldset>
                <fieldset>
                        <label>Email:</label><input type="email" name="email" required/><br>
                </fieldset>
                <fieldset>
                        <label>Password:</label> <input type="password" name="password" required/><br>
                </fieldset>

            <input type="submit" value="Enviar" id="send"/>
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
