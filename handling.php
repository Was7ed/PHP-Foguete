<?php 
	
	require_once 'foguete.php';

	$pass = $_GET["gasolina"];
	$g = $_GET["piloto"];
	$pil = $_GET["passageiros"];

	$foguete = new Foguete;

	$gas = $foguete->gas($g);
	$piloto = $foguete->piloto($pil);
	$passageiros = $foguete->passageiros($pass);


	echo $gas. "<br>";
	echo $piloto. "<br>";
	echo $passageiros. "<br>";

 ?>