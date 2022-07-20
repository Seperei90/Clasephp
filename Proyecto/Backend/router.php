<?php
			if(isset($_GET['r']) && $_GET['r'] != ""){

			$ruta = $_GET['r'];    

			if($ruta == "home"){
				include("vistas/home_vista.php");
			}elseif($ruta == "Ajedrecistas"){
				include("vistas/ajedrecistas_vista.php");
			}elseif($ruta == "Noticias"){
				include("vistas/noticias_vista.php");
			}elseif($ruta == "Contactenos"){
				include("vistas/contacto_vista.php");
			}else{
				echo("<h1>Bienvenidos a ChessDiablo</h1>");
			}
		    }else{
			    echo("<h1>Bienvenidos a ChessDiablo</h1>");
		    }

?>




