<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Museo</title>
</head>
<body>
<h1>Subir Mí Museo</h1>
<form action="recibeMuseo.php" method="post" enctype="multipart/form-data">
    <table border=3>
        <tr>
            <td><label for="">Clave</label></td>
            <td>
                <input type="numeric" name="Clave" min="1" placeholder="Clave de Museo">
            </td>
        </tr>
        <tr>
            <td>Imagen del Museo</td>
                <td>
                    <input type="file" name="img">
                </td>
            </tr>
        <tr>
            <td>Nombre</td>
            <td>
                <input type="text" name="Muse" placeholder="El Rehilete">
            </td>
        </tr>
        <tr>
            <td>Descripcion</td>
            <td>
                <input type="text" name="Desc" placeholder="Descripcion">
            </td>
        </tr>
        <tr>
            <td>Categoría</td>
            <td>
                <input type="text" name="Cat" placeholder="Infantil">
            </td>
        </tr>
        <tr>
            <td>Correo</td>
            <td>
                <input type="email" name="Corr" placeholder="elrehilete@info.com">
            </td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td>
                <input type="numeric" name="Tel" placeholder="5656464">
            </td>
        </tr>
        <tr>
            <td>Horario Apertura</td>
            <td>
                <input type="time" name="HrarioA" placeholder="10:00">
            </td>
        </tr>
        <tr>
            <td>Horario Cierre</td>
            <td>
                <input type="time" name="HrarioC" placeholder="10:00">
            </td>
        </tr>
        <tr>
            <td>CP</td>
            <td>
                <input type="numeric" name="CodeP" placeholder="55074">
            </td>
        </tr>
        <tr>
            <td>Numero</td>
            <td>
                <input type="numeric" name="Num" placeholder="23">
            </td>
        </tr>
        <tr>
            <td>Municipio</td>
            <td>
                <input type="text" name="Muni" placeholder="55074">
            </td>
        </tr>
        <tr>
            <td>Colonia</td>
            <td>
                <input type="text" name="Col" placeholder="Vientos Tranquilos">
            </td>
        </tr>
        <tr>
            <td>Calle</td>
            <td>
                <input type="text" name="Call" placeholder="Viento Nuevo">
            </td>
        </tr>
        <tr>
            <td colspan=2>
                <input type="submit" value="ENVIAR">
            </td>
        </tr>
        <tr>
            <td  colspan=2>
                <input type="reset" value="LIMPIAR ">
            </td>
        </tr>
    </table>
</form>
</body>
</html>