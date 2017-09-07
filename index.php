<?php 

	require_once 'foguete.php';

 ?>

<!DOCTYPE html:5>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Foguete</title>
</head>
<body>
<header>
	<div>
		<h2>Vamos ver se você sobreviveria organizando uma expedição para o espaço</h2>
		<h4>Escolha os números abaixo e verifique sua resposta</h4>
		<form action="handling.php" method="get">
			<input type="text" name="gasolina" placeholder="Quantidade de gasolina">
			<input type="text" name="piloto" placeholder="Quantos pilotos">
			<input type="text" name="passageiros" placeholder="Quantos passageiros">
			<input id="btn" type="submit" value="Enviar">
		</form>
	</div>
</header>
</body>
</html>

