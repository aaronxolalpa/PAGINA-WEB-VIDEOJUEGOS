<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
            function imprimir() {
                if (window.print) {
                    window.print();
                } else {
                    alert("La función de impresion no esta soportada por su navegador.");
                }
            }
        </script>
    </head>
    <body onload="imprimir();">
        <div style="text-align:center">
<table border="2" align="center">
<tr>
	<td>Precio:
	<td>$<?php echo $mostrar[""]?><br>
</tr>
<tr>
	<td>Cantidad:
	<td><?php echo $mostrar[""]?><br>
</tr>
<tr>
	<td>TOTAL:
	<td>$<?php echo $mostrar[""]?><br>
</tr>
<tr>
	<td>IVA 16%:
	<td>$<?php echo $mostrar[""]?><br>
</tr>
<tr>
	<td>TOTAL:
	<td>$<?php echo $mostrar[""]?><br>
</tr>
<tr>
	<td>DESCUENTO:
	<td>$<?php echo $mostrar[""]?><br>
</tr>
<tr>
	<td>MENSUALIDAD 3 MESES:
	<td>$<?php echo $mostrar[""]?><br>
</tr>
<tr>
	<td>MENSUALIDAD 6 MESES:
	<td>$<?php echo $mostrar[""]?><br>
</tr>
</table>
</div>
<?php
		$valor9=$_POST["valor11"];
		$valor10=$_POST["valor11"];
		$valor11=$_POST["valor11"];
		$valor12=$_POST["valor11"];
		$valor13=$_POST["valor11"];
		$valor14=$_POST["valor11"];
		$valor15=$_POST["valor11"];
		$valor16=$_POST["valor11"];
?>
</body>
</html>