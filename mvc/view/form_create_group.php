<html>
<head>
<title> Crear Grupo </title>
</head>
<body background="fondo.jpg">
<?php
    echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
<form action="Controller_create_group.php" method= "POST">
    <p> introduce el nombre del grupo a crear </p>
    <p>Grupo: <input type="text" name="group" size="50"></p>
    <input type="submit" name="create" value="Enviar">
    <input type="submit" name="principal" value="Volver">
  </p>
</form>
</body>
</html>
