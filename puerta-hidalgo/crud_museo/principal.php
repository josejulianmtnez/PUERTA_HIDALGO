
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../paginas/museos.css">
    <title>Pagina Principal</title>
</head>
<body>

<header>
		<nav>
			<a href="#">Inicio</a>
			<a href="#">Sobre mí</a>
			<a href="#">Destinos</a>
			<a href="#">Gastronomía</a>
		</nav>
</header>

<div class="encabezado-img">
        <h1>¿QUIERES CONOCER HIDALGO?</h1>
		<p>Abre las puertas al pasado y sumergete en los diversos museos y zonas arqueologicas que Hidalgo tiene para tí.</p>
        <br>
        <div class="search">
            <form action="">
            <input type="text" class="search__input" placeholder="Ingresa un destino">
            <button class="search__button">
            <svg class="search__icon" aria-hidden="true" viewBox="0 0 24 24">
                <g>
                    <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                </g>
            </svg>
            </button>
            </form>
        </div>
</div>

<main class="zonas container">
        <h2>Lugares más visitados</h2>  
<div class="zonas-content">
<?php
    include_once('crud.php');
    $crud = new UserDAO(); //llamando a la conexion de base de datos
    //ResultSet
    $result = $crud->verTodos();
    //echo "Filas: ".$result->rowCount();

      if($result->rowCount()>0){
          $st = $result->fetchAll(PDO::FETCH_OBJ);
          foreach($st as $recor){
              echo " <div class='card'>
                        <img src='".$recor->foto_ruta."' class='card-img'>
                        <div class='card-body'>
                        <p class='card-sub-title'>$recor->municipio</p>
                        <a href='verMuseos.php?nombre=".urlencode($recor->nombre_mz)."'><h1 class='card-title'>$recor->nombre_mz</h1></a>
                        </div>
                    </div>";
          }
      }else{
          echo 
          "
                        <div>
                        <p class='card-sub-title'>Aún no se han publicado múseos</p>
                        <h1>Sí eres dueño de un museo, por favor, regístrate como organización y ¡Públicate!</h1>
                        </div>
    
          ";
      }   
  ?>
</div>
</main>

<footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <h3>Sobre Puerta Hidalgo</h3>
                <ul>
                    <li><a href="#">Contactanos</a></li>
                    <li><a href="https://www.hidalgo.gob.mx">Sitio Oficial de Hidalgo</a></li>
                    <li><a href="#">Aviso de privacidad</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>Siguenos</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">X</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>Desarrollado por Rocket Systems</h3>
                <ul>
                    <li></li>
                    <li><a href="#">Acerca de nosotros</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Correo</a></li>
                </ul>
            </div> 
                       
        </div>
        <ul class="copyrigth" align="center">
            <li><b>Copyright <sup>©</sup></b> 2023 Todos los derechos reservados por Puerta Hidalgo</li>
        </ul>
    </footer>
</body>
</html>