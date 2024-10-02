<?php
	session_start();  
	error_reporting(0);
?>
<html>
<head><meta charset="UTF-8">
        <title>Ticket</title>
        <script type="text/javascript">
            function imprimir() {
                if (window.print) {
                    window.print();
                } else {
                    alert("La función de impresion no esta soportada por su navegador.");
                }
            }
        </script></head>
<body onload="imprimir();">
<h2><p align=center></b>Comprobante de compra</b></p></h2>
<table border="1" align="Center" height="250" width="250">
<tr>
	<td>Apellido:
	<br>Nombre:
	<br>E-Mail:
	<br>Direccion:
	<br>C.P:
	<br>Ciudad:
	<br>Pais:
	<br>Telefono:
	</td>
        <td>
	<?php echo $_POST['apellido'];?><br>
 <?php echo $_POST['nombre'];?><br>
  <?php echo $_POST['email'];?><br>
  <?php echo $_POST['direc'];?><br>
  <?php echo $_POST['cp'];?><br>
 <?php echo $_POST['ciudad'];?><br>
  <?php echo $_POST['pais'];?><br>
  <?php echo $_POST['tel'];?><br>

	</td>
</tr>
</table>
<br><br><br><br><br>
<div style="text-align:center">
<table border="2" align="center">
<tr>
	<td>Precio:
	<td>$<?php echo $_SESSION['PRECIO']?><br>
</tr>
<tr>
	<td>Cantidad:
	<td><?php echo $_SESSION['CANTIDAD']?><br>
</tr>
<tr>
	<td>SUBTOTAL:
	<td>$<?php echo ($_SESSION['PRECIO']* $_SESSION['CANTIDAD'])?><br>
</tr>
<tr>
	<td>IVA 16%:
	<td>$<?php echo (($_SESSION['PRECIO']*$_SESSION['CANTIDAD'])*.16)?><br>
</tr>
<tr>
	<td>TOTAL(IVA incluido):
	<td>$<?php echo ((($_SESSION['PRECIO']*$_SESSION['CANTIDAD'])*.16)+($_SESSION['PRECIO']*$_SESSION['CANTIDAD']))?><br>
</tr>
<tr>
	<td>MENSUALIDAD 3 MESES:
	<td>$<?php echo ((($_SESSION['PRECIO']*$_SESSION['CANTIDAD'])*.16)+($_SESSION['PRECIO']*$_SESSION['CANTIDAD']))/3?><br>
</tr>
<tr>
	<td>MENSUALIDAD 6 MESES:
	<td>$<?php echo ((($_SESSION['PRECIO']*$_SESSION['CANTIDAD'])*.16)+($_SESSION['PRECIO']*$_SESSION['CANTIDAD']))/6?><br>
</tr>
</table>
</div>
<button id="imprimir">Imprimir</button>
</body>
</html>