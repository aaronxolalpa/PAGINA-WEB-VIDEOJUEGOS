<html>
<head><title>Formulario 1</title></head>
<style>
div#tres {
border: 2px solid blue;
width: 60%;
color: white;
background-color: #010131;
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;
align-content: center;
}
input[type=text], select {

width: 20%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}
input[type=password], select{
width: 20%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}
input[type=submit] { 
background-color: lightgray;
color: black;
padding: 10px 40px;
margin: 8px 0;
border: 2px solid #0B6083;
border-radius: 4px;
cursor: pointer;
}

input[type=submit]:hover {
background-color: #543F7F;
}
body{
	background-image: url(gamer4.jpg);
}
div#dos {
border: 2px solid blue;
width: 60%;
background-color: #010131;
padding-top: 10px;
padding-right: 10px;
color: white;
padding-bottom: 10px;
padding-left: 10px;
align-content: center;
</style>
<body>
	<div id="tres"><center>CREAR CUENTA:</center></div>
	<div id="dos"><form action="USUARIO.php" method="post">
<label>Nombre:</label>
<input type="text" name="nombre" placeholder="Nombre..">
<br>
<label>Apellido:</label>
<input type="text"name="apellido" placeholder="Apellido..">
<br>
<label>e-mail:</label>
<input type="text"name="email" placeholder="e-mail..">
<br>
<label>Contraseña:</label>
<input type="password"name="direc" placeholder="password..">
<br>
<input type="submit" name="regresar" value="Regresar">
<input type="submit" name="enviar" value="confirmar">
</form>
</div>
<?php
if(isset($_POST['confirmar']))
{
	header("LOCATION: USUARIO.php");
}
if(isset($_POST['cancelar']))
{
	header("LOCATION: CARRITO.php");
}
?>
</body>
</html>
</body>
</html>
