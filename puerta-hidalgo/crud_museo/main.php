<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museos</title>
</head>
<body>
<h1>DESCUBRIR</h1>
<div>
</div>
<p>Seleccion un museo para ver su información</p>
  <table border=1>
  <tr>
      <th>IMAGEN</th>
      <th>NOMBRE</th>
      <th>DESCRIPCION</th>
      <th>CATEGORIA</th>
      <th>MÁS</th>
  </tr>
  <tr></tr>
  <?php
    include_once('crud.php');
    $crud = new UserDAO(); //llamando a la conexion de base de datos
    //ResultSet
    $result = $crud->verTodos();
    //echo "Filas: ".$result->rowCount();

      if($result->rowCount()>0){
          $nr = 1;
          $st = $result->fetchAll(PDO::FETCH_OBJ);
          foreach($st as $recor){
              echo "<tr>
                      <td><img src='".$recor->foto_ruta."'</td>
                      <td>$recor->nombre_mz</td>
                      <td>$recor->descripcion</td>
                      <td>$recor->categoria</td>
                      <td><a href='verMuseos.php?nombre=".urlencode($recor->nombre_mz)."'>Ver más</a></td>
              </tr>";
          }
      }else{
          echo "<tr>
              <td colspan=7>
              <marquee>No hay registros</marquee>
              </td>
          </tr>";
      }   
  ?>
</table>
</body>
</html>