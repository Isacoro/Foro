<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tu foro</title>
    <meta charset="UTF-8">
    <link href="css/estiloindex.css" rel="stylesheet" type="text/css" />
</head>

<body>
<header>
    <?php
    include 'header.php';
    ?>
</header>
<h1 style="text-align: center">Tu mensaje</h1>

<table>
    <form method="POST" action="agregar.php" >
        <tr>
            <td width="30%" align="right">Autor</td>
            <td><input type="text" name="txtAutor"></td>
        </tr>
        <tr>
            <td width="30%" align="right">Titulo</td>
            <td><input type="text" name="txtTitulo"></td>
        </tr>
        <tr>
            <td width="30%" align="right">Mensaje</td>
            <td><textarea name="txtMensaje" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input style="margin-left: 150px" type="submit" name="Submit" value="Enviar Mensaje"></td>
        </tr>
    </form>
</table>

<footer style="margin-top: 250px">
    <a href="#">Términos y condiciones de uso</a><br>
    <label>&reg; IRC</label>
</footer>
</body>
</html>
