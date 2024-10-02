<html>
<head><title>INICIO</title></head>
<style>
div#tres {
border: 1px solid #0D0D67;
padding: 10px;
color: white;
background-color: #0D0D67;
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
input[type=reset]:hover {
background-color: blue;
}
div#uno {
border: 1px solid #6D13CC;
color: white;
font-family: Tahoma;
background-color: #6D13CC;
padding:5px;
padding-left: 50px;
}
div#dos {
border: 1px solid #5353F8;
color: white;
font-family: Tahoma;
background-color: #5353F8;
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
font-family: Verdama;
width: 10%;
background-color: #DC180B;
padding-top: 10px;
padding-right: 10px;
padding-bottom: 10px;
padding-left: 10px;
}
</style>
<body bgcolor="black">
	<div align="right" id="tres"><form method="post" action="INICIAL.php">
		<right> TEL:554986725 - 5599875213</right></div>
		<div id="dos"><form method="post" action="INICIAL.php">
			<img src="logo.png" align="left" width="180" height="180"><p align="center">DIR: 8779 PE-6, New Glasgow, PE C0A 1N0, Canadá </p><br><br><br><br><br><br></form></div>
		<div id="uno"><form method="post" action="INICIAL.php"><br><input type="submit" name="inicio" value="INICIO"><font color="#6D13CC">...............................................</font><input type="submit" name="somos" value="¿Quienes somos?"><font color="#6D13CC">.......................................</font><input type="submit" name="productos" value="PRODUCTOS"><font color="#6D13CC">.......................................</font><input type="submit" name="politicas" value="Politicas de compra"></form></div>
		<img src="consolas.jpg" align="center">
</form></div>
<?php
	if(isset($_POST['inicio']))
{
	header("LOCATION: INICIAL.php");
}
if(isset($_POST['somos']))
{
	header("LOCATION: somos.php");
}
if(isset($_POST['productos']))
{
	header("LOCATION: USUARIO.php");
}
if(isset($_POST['politicas']))
{
	header("LOCATION: politicas.php");
}
?>
</body>
</html>