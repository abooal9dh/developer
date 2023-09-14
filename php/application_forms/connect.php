<?php 
	$sn = 'localhost'; 
	$un = 'root';
	$pw = '';
	$dbn = 'aljumah';
	$msc= mysqli_connect($sn, $un, $pw, $dbn);
	mysqli_set_charset($msc, 'utf8mb4');
?>