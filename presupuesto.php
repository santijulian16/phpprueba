<?php
$saldo=$_POST['saldo'];
if($saldo<0){
	$prestamo=10000-$saldo;
	$nuevoSaldo=$saldo+$prestamo;
	$nuevoSaldo=$nuevoSaldo-7000;
	$insumos=$nuevoSaldo/2;
	$incentivos=$nuevoSaldo/2;
	header("location: index.php?saldo=$saldo&prestamo=$prestamo&nuevoSaldo=$nuevoSaldo&insumos=$insumos&incentivos=$incentivos");
}else if($saldo>=0 && $saldo<20000){
	$prestamo=20000-$saldo;
	$nuevoSaldo=$saldo+$prestamo;
	$nuevoSaldo=$nuevoSaldo-7000;
	$insumos=$nuevoSaldo/2;
	$incentivos=$nuevoSaldo/2;
	header("location: index.php?saldo=$saldo&prestamo=$prestamo&nuevoSaldo=$nuevoSaldo&insumos=$insumos&incentivos=$incentivos");
}else{
	$nuevoSaldo=$saldo;
	$nuevoSaldo=$nuevoSaldo-7000;
	$insumos=$nuevoSaldo/2;
	$incentivos=$nuevoSaldo/2;
	header("location: index.php?saldo=$saldo&insumos=$insumos&incentivos=$incentivos");
}
?>