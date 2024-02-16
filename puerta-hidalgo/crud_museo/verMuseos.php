<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../paginas/verMuseo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <title>

    <?php
            include_once('crud.php');
                $nombre_museo = urldecode($_GET['nombre']);
                $crud = new UserDao();
                $result = $crud->buscar($nombre_museo);
                $st = $result->fetch(PDO::FETCH_OBJ);
                echo "$st->nombre_mz"
          ?>
    
    </title>
</head>
<body>

<header class="header">
        <div class="menu container">
            <a href="#" class="logo"><img src="../Multimedia/img/whitelogo.png" alt=""></a>
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
            <nav class="navbar">
                <ul>
                    <li><a href="#">Descubrir</a></li>
                    <li><a href="#">Dónde ir</a></li>
                    <li><a href="#">Iniciar sesión</a></li>
                    <li><a href="#">Registrarse</a></li>
                </ul>
            </nav>
        </div>


    <div class="header-content container">
            <?php
                include_once('crud.php');
                $crud = new UserDAO();
                $result = $crud->buscar($nombre_museo);
                    if($result->rowCount()>0){
                        $st = $result->fetch(PDO::FETCH_OBJ);
                        //echo "<img src='".$st->foto_ruta."' class='header-img'>";
                    }else{
                        echo "<p>No se pudo cargar la imágen</p>";
                    }   
            ?>

        <style>
            .header {
                background-image: linear-gradient(
                rgba(0, 0, 0, 0.6),
                rgba(0, 0, 0, 0.6)),
                url('<?php echo $st->foto_ruta ?>');
                background-position: center;
                background-repeat: none;
                background-size: cover;
                min-height: 100vh;
                display: flex;
                align-items: flex-end;
            }
        </style>

            <?php
                include_once('crud.php');
                $crud = new UserDAO();
                $result = $crud->buscar($nombre_museo);
                if($result->rowCount()>0){
                $st = $result->fetch(PDO::FETCH_OBJ);
                echo "
                <h1 class='nice'>$st->nombre_mz</h1>
                <p><b><span>$st->categoria</span></b></p>
                <p>$st->descripcion</p>  
                <div class='info-contacto'>
                    <div class='contacto-item'>
                        <span class='icono'><i class='fas fa-envelope'></i></span>
                        <p>$st->correo_e</p>
                    </div>
                    <div class='contacto-item'>
                        <span class='icono'><i class='fas fa-phone'></i></span>
                        <p>$st->telefono</p>
                    </div>
                </div>         
                ";

                }else{
                echo "<p>No se pudo cargar la imágen</p>";
                }   
            ?>
        </div>
    </header>


</body>
</html>