<html>
<head><title>Agregar al carrito</title></head>
<style>
div#tres {
border: 8px solid black;
padding: 25px;
background-color: lightblue;
border-top-style: dotted;
border-right-style: solid;
border-bottom-style: dotted;
border-left-style: solid;
border-style: solid;
border-width: medium;
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
input[type=tel], select{
width: 10%;
padding: 9px 30px;
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
	float: center;	
	background-image: url(gamer2.jpg);
}
input[type=reset] {
background-color: green;
color: white;
padding: 10px 40px;
margin: 8px 0;
border: 2px solid red;
border-radius: 4px;
cursor: pointer;
}
input[type=reset]:hover {
background-color: #08104F;
}
div#uno {
border-radius: 5px;
background-color: red;
padding: 20px;
}
div#dos {
border: 2px solid #1AB3F0;
width: 60%;
background-color: gray	;
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;
align-content: center;
}
div#cuatro {
border: 4px solid #7C0707;
width: 60%;
background-color: #24D40C;
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;
}
div#cinco {
border: 4px solid #7C0707;
width: 60%;
background-color: #DC180B;
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;
}
</style>
<body>
	<div align="center" id="dos"><form action="CARRITO.php" method="post">
		<label>Nombre</label>
<input type="text" name="nombre" placeholder="Your name..">
<br>
<label>Apellido</label>
<input type="text"name="apellido" placeholder="Your last name..">
<br>
<br>
 <input type="submit" name="ingresar" value="Ingresar">
<input type="submit" name="crear" value="Crear cuenta">
</form>
</div>
<?php
if(isset($_POST['ingresar']))
{
	header("LOCATION: USUARIO.php");
}
if(isset($_POST['crear']))
{
	header("LOCATION: CUENTA.php");
}
?>
</body>
</html>
</body>
</html>
