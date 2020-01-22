<?php
	$dataUltrasonik	= $_POST["ultrasonik"];
	$dataKekeruhan	= $_POST["kekeruhan"];
	$dataPHair		= $_POST["phair"];

	$fileUltrasonik = "<p>Sensor Ultrasonik = " . $dataUltrasonik . " cm</p>";
	$fileKekeruhan = "<p>Sensor Kekeruhan Air = " . $dataKekeruhan . " cm</p>";
	$filePHAir = "<p>Sensor PH Air = " . $dataPHair . " cm</p>";
	
	file_put_contents('dataUltrasonik.php',$fileUltrasonik);
	file_put_contents('dataKekeruhan.php',$fileKekeruhan);
	file_put_contents('dataPHair.php',$filePHAir);
	
	
?>