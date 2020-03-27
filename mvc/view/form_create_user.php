<html>
<head>
<title> Crear Usuario </title>
</head>
<body background="fondo.jpg">
<?php
    echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
<form action="Controller_create_user.php" method= "POST">
    <p>Usuario: <input type="text" name="user" size="50"></p>
    <p>Contraseña: <input type="text" name="passw" size="50"></p>
    <p>Folder: <input type="text" name="folder" size="50"></p>
    <p>Grupo: <input type="text" name="group" size="50"></p>

    <p>
    <input type="submit" name="create" value="Enviar">
    <input type="submit" name="principal" value="Volver">
  </p>
</form>
</body>
</html>
