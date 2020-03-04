<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
</head>
<body>

<form action="insertar.php" method="post" enctype="application/x-www-form-urlencoded">
	
	<label for="caja1"> <p>Nombre usuario</p> 
	<p><input id="caja1" type="text" name="usuario" placeholder="Nombre" required autofocus></p>	
	</label>

	<label for="caja2"> <p>Password</p> 
	<p><input id="caja2" type="password" name="password" placeholder="password" required autofocus></p>	
	</label>

	<input type="submit" value="Resistrarse">

</form>

</body>
</html>