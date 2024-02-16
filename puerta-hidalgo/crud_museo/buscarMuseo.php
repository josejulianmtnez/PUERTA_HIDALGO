<?php
    include_once('crud.php');

    $nombre = $_POST["nom"];
    echo "ID a buscar: $nombre";

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Consulta</title>
</head>
<body>
<h1>Registro Encontrado</h1>
    <table border=1>
        <tr>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>CATEGORIA</th>
        </tr>
        <?php
            $crud = new UserDAO(); //llamando a la conexion de base de datos
            $resul = $crud->buscar($nombre);
            $rs = $resul->fetch(PDO::FETCH_OBJ);
            if ($nombre=$rs){
                echo "<tr>
                        <td>$rs->nombre_mz</td>
                        <td>$rs->descripcion</td>
                        <td>$rs->categoria</td>
                </tr>";
            }else{
            echo "<tr>
                <td colspan=7>
                <marquee>No hay registros</marquee>
                </td>
            </tr>";
        }

        ?>
    
    </table>
    <br>
    
    
</body>
</html>

<?php
 echo "<a href='verMuseos.php'>Regresar</a>"
?>



