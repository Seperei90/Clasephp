<?php





?>

<!DOCTYPE html>
	<html>
		<head>
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link type="text/css" rel="stylesheet" href="web/css/materialize.css"  media="screen,projection"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<style>
			body {
				display: flex;
			    min-height: 100vh;
				flex-direction: column;
			}
			main {
				flex: 1 0 auto;
			}
			table.striped > tbody > tr:nth-child(odd) {
				background-color: #bdbdbd ;
			}



		</style>
		</head>
		<body>
       
			<nav>
				<div class="nav-wrapper black">
				<a href="#" class="brand-logo center">ChessDiablo</a>
				<ul id="nav-mobile" class="left hide-on-med-and-down">
				<li><a href="index.php"><i class="large material-icons">home</i></a></li>
				</ul>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="Ajedrecistas.html">Ajedrecistas</a></li>
					<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Noticias<i class="material-icons right">arrow_drop_down</i></a></li>
					<li><a href="Contacto.html">Contactenos</a></li>
				</ul>
				</div>
			</nav>
				
  
   		<main>
			<div class="container">
				<h3>AJEDRECISTAS</h3>
			 <table class="striped">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Sexo</th>
			  <th>Fecha de Nacimiento</th>
			  <th>ELO FIDE</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Ruben</td>
            <td>Pereira</td>
            <td>M</td>
			<td>11/07/1990</td>
			<td>1540</td>
          </tr>
          <tr>
            <td>Manuel</td>
            <td>De los Santos</td>
            <td>M</td>
			<td>08/09/1995</td>
			<td>1015</td>
          </tr>
          <tr>
            <td>Angelica</td>
            <td>Sena</td>
            <td>F</td>
			<td>27/01/2005</td>
			<td>890</td>
          </tr>
		  <tr>
            <td>Dylan</td>
            <td>Brun</td>
            <td>M</td>
			<td>29/03/2013</td>
			<td>620</td>
          </tr>
		  <tr>
            <td>Martina</td>
            <td>Fernandez</td>
            <td>F</td>
			<td>29/01/2017</td>
			<td>400</td>
          </tr>
        </tbody>
      </table>			
			</div>
		</main>

		<footer class="page-footer black">
			<div class="footer-copyright">
				<div class="container">
						© 2022 Copyright ChessDiablo
				</div>
				<div>
						<a class="grey-text text-lighten-4 right" href="#!">Nosotros</a>
				</div>
				<!--Espacio entre contenidos 
					<div>
						&nbsp;
					</div>
				-->
			</div>
		</footer>




			
			<script type="text/javascript" src="web/css/materialize.js"></script>
		</body>
	</html>