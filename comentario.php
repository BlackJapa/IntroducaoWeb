<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Motoca Road</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/sweetalert2.css">
		<link rel="stylesheet" href="css/sweetalert2.min.css">
		<link rel="stylesheet" href="css/estilo">
</head>
<body>

		<?php
		include_once "navbar.php";
		?>



	<form action="coment.php" method="POST" role="form" id="registro">
		
	
		<div class="form-group" style="margin-left: 100px; margin-right: 100px">
			<legend>Deixe seu comentário</legend>
			<label for="">Nome</label>
			<input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
			<label for="">email</label>
			<input type="text" name="email" class="form-control" id="email" placeholder="Digite seu email">
			<label for="">Digite seu comentário</label>
			<textarea name="coment" id="coment" class="form-control" rows="3" required="required" placeholder="Digite seu comentário"></textarea></br>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	
		
	
		
	</form>


		<script src="js/jquery.min.js"></script>
		<script src="js/core.js"></script>
		<script src="js/java.js"></script>
		<script src="js/sweetalert2.all.js"></script>
		<script src="js/sweetalert2.all.min.js"></script>
		<script src="js/sweetalert2.common.js"></script>
		<script src="js/sweetalert2.min.js"></script>
		<script src="js/sweetalert2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/deryk.js"></script>

</body>
</html>