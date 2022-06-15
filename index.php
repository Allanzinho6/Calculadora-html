<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
	<title>CalculadoraMedia</title>
</head>
<body>

	<form action="destino.php" method="POST">
		<div>
		<div>
			<label for="name">Nome</label>
			<input type="text" name="name"
			placeholder="Digite o nome do aluno">
		</div>
		<div>
			<label for="nota-1">Nota 1</label>
			<input type="text" name="nota[]" placeholder="Digite a nota da unidade 1">
		</div>
		<div>
			<label for="nota-2">Nota 2</label>
			<input type="text" name="nota[]" placeholder="Digite a Nota da Unidade 2">
		</div>
		<div>
			<label for="nota-3">Nota 3</label>
			<input type="text" name="nota[]" placeholder="Digite a Nota da Unidade 3">
		</div>
		<input type="submit" value="Enviar">
		<?php 
	
		$name = $_POST['name'];
	
		$media = array_sum($_POST['nota']) / count($_POST['nota']);

		echo "A media aritmética dos valores é: $media";
		echo "<br>";
		echo sizeof($_POST['nota']);
		?>
		</div>
	</form>
	
</body>
</html>