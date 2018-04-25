<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/backoffice.css" />

<title>Apoio ao Membro</title>
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

        <h1>Apoio ao Membro</h1>

        <form action="connect_medicos.php" method="post">
            <fieldset>
                <label>Nome:</label> <input type="text" name="nome" required/><br>
            </fieldset>
            <fieldset>
                <label>Telefone:</label> <input type="text" name="telefone" required/><br>
            </fieldset>
            <fieldset>
                <label>Email:</label> <input type="email" name="email" required/><br>
            </fieldset>
            <fieldset>
                <label>Tópico:</label> <input type="text" name="topico" required/><br>
            </fieldset>
            <fieldset>
                <label>Problema:</label> <textarea type="text" name="topico" required></textarea><br>
            </fieldset>

            <input type="submit" value="Enviar" id="send"/>
        </form>

    </header>

    <article>

        <h1>Entre em contacto connosco</h1>

        <p><strong>Telefone:</strong>    911 111 111<br><strong>Email:</strong> Email@all-in-saude.com<br><strong>Morada:</strong> Avenida da Liberdade, nº 11</p>

        <div id="map"></div>

			<script>
              function initMap() {
                var uluru = {lat: 38.716511, lng: -9.143022};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 17,
                  center: uluru
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map
                });
              }
            </script>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv4AxyQKMm6VQiYWfsU7AMkld8f1-zxb8&callback=initMap">
            </script>

        </div>


    </article>

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
