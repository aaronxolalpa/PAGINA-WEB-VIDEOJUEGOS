<html>
<style>
input[type=text], select {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-family: Bookman Old Style;
}

input[type=submit] {
  width: 20%;
  background-color: #000000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  border: 4px solid white;
   font-family: Bookman Old Style;
}
input[type=submit] {
  width: 20%;
  background-color: #000000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  border: 4px solid white;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #FFFF00;
  padding: 80px;
  border: 4px solid white;
}
</style>
<body background="juego.png">
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
  <?php 
  echo $_POST['apellido'];?><br>
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

  <form action="INICIAL.php"  method="post"> 
    <font face="Bookman Old Style"><center><h2>Resultado</h2></center></font>
    <div>
      <font face="Bookman Old Style"><label for="fname">Forma de pago</label></font>
    <input type="text" id="fid" name="pago" placeholder="Forma de pago..">
    <br><br>
    <font face="Bookman Old Style"><label for="lname">Numero de cuenta</label></font>
    <input type="text" id="lname" name="cuenta" placeholder="Numero de cuenta.....">
    <br><br>
    <font face="Bookman Old Style"><label for="nombre">Confirmar</label></font>
    <input type="text" id="confirmar" name="confirmar">
    <br><br>s
    <font face="Bookman Old Style"><label for="lname">Numero de cuenta</label></font>
    <input type="text" id="lname" name="cantidad" placeholder="Cantidad.....">
    <br><br>
    <font face="Bookman Old Style"><p><input type="radio" name="fpago" value="Contado">Contado</p></font>
    <font face="Bookman Old Style"><p><input type="radio" name="fpago" value="3meses">3 Meses</p></font>
    <font face="Bookman Old Style"><p><input type="radio" name="fpago" value="6meses"> 6 Meses</p></font>

<center><p><input type="checkbox" name="Aceptar" value="Aceptar"> Aceptar Terminos y condiciones</center></p>
    <center><input type="submit"  name="Cancelar" value="Cancelar"></center>
    <center><input type="submit"  name="Continuar" value="Continuar"></center>
  </form>
    </div>
<?php
if(isset($_POST['Cancelar']))
{
  header("LOCATION: CARRITO.php");
}
if(isset($_POST['Continuar']))
{
  header("LOCATION: ticket.php");
}
    ?>
</body>
</html>