<?php 
	include 'listar.php';
	include 'conexao.php';
	$query = "SELECT * FROM comentarios";
	$consulta = sql_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<title>Comentário</title>
</head>
<body class='dark'>
	<div id="cont">
		<h1>Lorem ipsum dolor sit amet</h1>
		<img src='foto.jpg'>
		<p class='p1'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p class='p2'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div id="form" class='hiden'>
		<div class="fundo">

			<form method="post" action="inserir.php">
				<label>Nome: </label><input type="text" name="nome">
				<label>Data: </label><input type="date" name="data"><br>
				<label>Comentário: </label><br><textarea name="comentario" maxlength="120" rows="6" cols="60"></textarea><br>
				<input type="submit" name="envia" value="Enviar">
			</form>
		</div>
	</div>
	<hr>
	<div id="dados">
		<h3>Comentários: </h3><button id='btnForm' onclick='modalComentar()'>Comentar</button>
		<?php echo listComt($consulta); ?>
	</div>
	<script src='js/main.js'></script>
</body>
</html>