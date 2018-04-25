<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/backoffice.css" />

<title>Registo de Novo Médico</title>
</head>

<body>

	<nav>

        <figure>
        	<a href="index.html"><img src="img/logo1.jpg" alt="Logótipo All-In Saúde"></a>
        </figure>


        <div id="menu_mobile">
        <h3><a href="login.php">Área do Prestador</a></h3>

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

        <h1>Marcação de Consulta</h1>

        <form action="" method="post">
            <fieldset>
                <label>Número de Sócio:</label> <input type="text" name="nome" id="nome" required/><br>
            </fieldset>
            <fieldset>
                <label>Nome:</label> <input type="text" name="especialidade" id="especialidade" required/><br>
            </fieldset>
            <fieldset>
                <label>Telefone:</label> <input type="text" name="preco" id="preco" required/><br>
            </fieldset>
            <fieldset>
                <label>Email:</label> <input type="email" name="preco" id="preco" required/><br><br><br><br>
            </fieldset>
            <fieldset>
                <label>Clínica:</label> <input type="text" name="preco" id="preco" required/><br>
            </fieldset>
            <fieldset>
                <label>Médico:</label> <input type="text" name="preco" id="preco" required/><br>
            </fieldset>
            <fieldset>
                <label>Especialidade:</label> <input type="text" name="preco" id="preco" required/>
            </fieldset><br><br>
            <fieldset>
                    <label>Consulta</label><input type="radio" name="tipo" value="Medico" class="radio" checked><br>
            </fieldset>
            <fieldset>
                    <label>Exame</label><input type="radio" name="tipo" class="radio" value="Veterinario"><br><br>
            </fieldset>
            <fieldset>
                <label>Se indicou exame, indique-nos qual:</label> <input type="text" name="preco" id="preco" required/>
            </fieldset><br><br>
            <h2>Preferência nº1</h2>
            <fieldset>
                <label>Dia:</label> <input type="text" name="preco" id="preco" required/>
            </fieldset>
            <fieldset>
                <label>Hora:</label> <input type="text" name="preco" id="preco" required/>
            </fieldset>
            <h2>Preferência nº2</h2>
            <fieldset>
                <label>Dia:</label> <input type="text" name="preco" id="preco" required/>
            </fieldset>
            <fieldset>
                <label>Hora:</label> <input type="text" name="preco" id="preco" required/>
            </fieldset>
            <h2>Preferência nº3</h2>
            <fieldset>
                <label>Dia:</label> <input type="text" name="preco" id="preco" required/>
            </fieldset>
            <fieldset>
                <label>Hora:</label> <input type="text" name="preco" id="preco" required/>
            </fieldset>

            <h2>Não tenho preferência, apenas que seja no dia mais próximo possível e que seja marcado:</h2>
            <fieldset>
                    <label>Na clínica</label><input type="radio" name="preferencia" value="Medico" class="radio" checked><br>
            </fieldset>
            <fieldset>
                    <label>Com o médico</label><input type="radio" name="preferencia" class="radio" value="Veterinario"><br><br>
            </fieldset>
            <fieldset>
                    <label>Na especialidade</label><input type="radio" name="preferencia" value="Medico" class="radio" checked><br>
            </fieldset>
            <fieldset>
                    <label>Na localidade</label><input type="radio" name="preferencia" class="radio" value="Veterinario"><br><br>
            </fieldset> <br><br>

            <fieldset>
                <label>Observações:</label> <textarea type="text" name="preco" id="preco" required></textarea>
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
