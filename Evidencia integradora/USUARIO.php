<?php
	session_start();
	error_reporting(0);
?>
<html>
<head><title>USUARIO</title></head>
<style>
div#tres {
	border: 2px solid black;
width: 60%;
background-color: #FFBA81;
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;
align-content: center;
}
input[type=text], select {

width: 50%;
padding: 12px 20px;
margin: 8px 0;
color:white;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
border-radius: 6px;
background-color: #091B6B;
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
div#uno {
border-radius: 5px;
background-color: red;
padding: 20px;
}
body{
	background-image: url(gamer3.jpg);
	background-repeat: no-repeat;
}
div#dos {
border: 2px solid black;
font-family: Arial;
width: 60%;
background-color: #FFBA81;
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;
align-content: center;
}
</style>
<body>
<div id="tres"><p align=center><font face="Bookman Old Style"><center><h2>Datos personales</h2></center></font></p></div>
<div id="dos"><form action="ticket.php" method="post">
<center><p><label>Nombre:</label></center></p>
<center><p><input type="text" name="nombre" placeholder="Nombre.."></center></p>
<br>
<center><p><label>Apellido:</label></center></p>
<center><p><input type="text"name="apellido" placeholder="Apellido.."></center></p>
<br>
<center><p><label>e-mail:</label></center></p>
<center><p><input type="text"name="email" placeholder="e-mail.."></center></p>
<br>
<center><p><label>Direccion:</label></center></p>
<center><p><input type="text"name="direc" placeholder="Direccion.."></center></p>
<br>
<center><p><label>Ciudad:</label></center></p>
<center><p><input type="text"name="ciudad" placeholder="Ciudad.."></center></p>
<br>
<center><p><label>Pais:</label></center></p>
<center><p><input type="text"name="pais" placeholder="Pais.."></center></p>
<br>
<center><p><label>Telefono:</label></center></p>
<center><p><input type="text"name="tel" placeholder="Telefono.."></center></p>
<br>
<center><p><label>CP:</label></center></p>
<center><p><input type="text"name="cp" placeholder="CP.."></center></p>
<br>

 
    <p align=center><font face="Bookman Old Style"><center><h2>Metodo de pago</h2></center></font></p>
    <div>
     <center><p><font face="Bookman Old Style"><label for="fname">Forma de pago</label></font></center></center></p>
    <center><p><input type="text" id="fid" name="pago" placeholder="Forma de pago.."></center></p>
    <br><br>
    <center><p><font face="Bookman Old Style"><label for="lname">Numero de cuenta</label></font></center></p>
    <center><p><input type="text" id="lname" name="cuenta" placeholder="Numero de cuenta.....">
    <br><br>
    <center><p><font face="Bookman Old Style"><label for="nombre">Confirmar</label></font></center></p>
    <center><p><input type="text" id="confirmar" name="confirmar"></center></p>
    <br><br>
    <center><p><font face="Bookman Old Style"><label for="lname">Numero de cuenta</label></font></center></p>
    <center><p><input type="text" id="lname" name="cantidad" placeholder="Cantidad....."></center></p>
    <br><br>
    <center><p><font face="Bookman Old Style"><input type="radio" name="fpago" value="Contado">Contado</p></font></center>
    <center><p><font face="Bookman Old Style"><input type="radio" name="fpago" value="3meses">3 Meses</p></font></center>
    <center><p><font face="Bookman Old Style"><input type="radio" name="fpago" value="6meses"> 6 Meses</p></font></center>

    <center><p><input type="checkbox" name="Aceptar" value="Aceptar"> Aceptar Terminos y condiciones</center></p>
    <center><p><input type="submit" name="regresar" value="Regresar"></center></p>
    <center><p><input type="submit" name="enviar" value="confirmar"></center></p>
</form>
</div>

<?php
if(isset($_POST['regresar']))
{
	header("LOCATION: CARRITO.php");
}
if(isset($_POST['enviar']))
{
	header("LOCATION: resultados.php");
}
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$direc=$_POST["direc"];
		$ciudad=$_POST["ciudad"];
		$pais=$_POST["pais"];
		$tel=$_POST["tel"];
		$email=$_POST["email"];
		$cp=$_POST["cp"];
		$pago=$_POST["pago"];
		$cuenta=$_POST["cuenta"];
		$confirmar=$_POST["confirmar"];
		$cantidad=$_GET["cantidad1"];
?>
</body>
</html>
</body>
</html>
