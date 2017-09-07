<?php 
	
	require_once 'foguete.php';

	$g = $_GET["gasolina"];
	$pil = $_GET["piloto"];
	$pass = $_GET["passageiros"];

	$foguete = new Foguete;

	$gas = $foguete->gas($g);
	$piloto = $foguete->piloto($pil);
	$passageiros = $foguete->passageiros($pass);



	echo $gas. "<br>";
	echo $piloto. "<br>";
	echo $passageiros. "<br>";


	echo "<script>location.href='index.php';</script>"; 
 ?>