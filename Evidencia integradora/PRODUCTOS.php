
<html>
<head><title>PRODUCTOS</title></head>
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

width: 10%;
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
background-color: blue;
color: white;
padding: 10px 40px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type=submit]:hover {
background-color: #45a049;
}
input[type=reset] {
background-color: green;
color: white;
padding: 10px 40px;
margin: 8px 0;
border: none;
border-radius: s4px;
cursor: pointer;
}
input[type=submit]:hover {
background-color: blue;
}
div#uno {
border-radius: 5px;
background-color: red;
padding: 20px;
}
div#dos {
border: 4px solid #7C0707;
width: 60%;
font-family: Tahoma;
background-color: lightblue;
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;
}
div#cuatro {
border: 4px solid #7C0707;
width: 60%;
font-family: Arial;
background-color: #24D40C;
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;
}
div#cinco {
border: 4px solid #7C0707;
width: 60%;
font-family: Verdama;
background-color: #DC180B;
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;
}
body{
	background-image: url(gamer.jpg);
	background-repeat: no-repeat;
}
</style>

<body>
	<div id="dos"><form action="datosplay.php" method="post">
	<img src="ps5.png" width="230" height="180" align="left"><label>COLOR</label><select name="pers">
        <option select>SELECCIONA</option>
        <option value="blanco">BLANCO</option>
        <option value="negro">NEGRO</option>
	 </select>
	 <br>
	 <input type="checkbox" name="discos" value="discos">Con lector de discos </center><br>
   	<br>
    	CANTIDAD:<input type="text" name="cantidad5"><br><br><br>
          Cantidad:<input type="text" name="cantidad1"><br><br><br>
	<br></form>
	<br><br>
	<form action="datosxbox.php" method="post">
	<img src="xbox.jpg" width="230" height="180" align="left"><label>COLOR</label><select name="pers">
     <option select>SELECCIONA</option>
     <option value="blanco">BLANCO</option>
     <option value="negro">NEGRO</option>
	 </select>
	 <br>
	 <center><input type="checkbox" name="xbox" value="xbox"> Xbox Series X</center><br>
    <br>
    CANTIDAD::<input type="text" name="cantidad4"><br><br><br>
    Cantidad:<input type="text" name="cantidad2"><br><br><br>
   
	<br></form>
	<br><br>
	<form action="datos.php" method="post">
	<img src="nintendo.jpg" width="250" height="180" align="left"><label>COLOR</label><select name="pers">
     	<option select>SELECCIONA</option>
    	<option value="blanco">GRIS</option>
     	<option value="negro">NEON</option>
	</select>
	<br>
 	<br><input type="checkbox" name="nswitch" value="nswitch"> Nintendo Switch </center>
    	<br>
    	CANTIDAD:<input type="text" name="cantidad3"><br><br><br>
	<center><p><input type="submit" name="sumbit" value="sumbit"></center></p>
        <center><p><input type="submit" name="enviar" value="confirmar"></center></p>
		
	<br></form></div>
	
<?php
	if(isset($_POST['sumbit']))
	{
	header("LOCATION:PRODUCTOS.php");
	}

	if(isset($_POST['regresar']))
	{
	header("LOCATION:resultados.php");
	} 

	
?>

</body>
</html>