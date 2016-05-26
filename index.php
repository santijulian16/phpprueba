<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>
<form id="formulario1" action="presupuesto.php" method="post">
	<label>Saldo Actual</label>
	<input type="num" name="saldo">
	<button type="sumbit" name="env">Enviar</button>
</form>
<?php
  if (isset($_GET['prestamo'])){
    echo '<label style="font-family:arial;">Saldo Actual: '.$_GET['saldo'].' </label><br />';
    echo '<label style="font-family:arial;">Prestamo :'.$_GET['prestamo'].'</label><br />';
  	echo '<label style="font-family:arial;">Nuevo Saldo : '.$_GET['nuevoSaldo'].'</label><br />';
    echo '<label style="font-family:arial;">Insumos : '.$_GET['insumos'].'</label><br />';
  	echo '<label style="font-family:arial;">Incentivos : '.$_GET['incentivos'].'</label><br />';
  }else if (isset($_GET['incentivos'])){
    echo '<label style="font-family:arial;">Saldo Actual: '.$_GET['saldo'].' </label><br />';
    echo '<label style="font-family:arial;">Insumos : '.$_GET['insumos'].'</label><br />';
    echo '<label style="font-family:arial;">Incentivos : '.$_GET['incentivos'].'</label><br />';

  }
?>
</body>
</html>