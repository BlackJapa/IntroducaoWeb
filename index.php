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


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php
		include_once "navbar.php";
		?>


		<?php
		include_once"car.php";
		?>




</br>
</br>
</br>


		<div  style="text-align: center;">
		<button type="button" class="btn btn-primary" onclick="subscribe()">inscrever-se</button>
		<form action="registro.php" method="POST" role="form" id="registro">
		</div>

<br>
<br>
<br>

		<div class="jumbotron text-center">
  		<h1 class="text-center">Comentários</h1>
  		</div>
		<<?php 
		$con = new PDO("mysql:host=l2raven.servegame.com:3306;dbname=fatec", "fatec", "web1234");
		$con->exec("set names utf8");
		$sql = "SELECT * FROM Comentarios";
		//$stmt = $con->prepare( $sql );
		//$result = $con->query( $stmt );
		//$rows = $result->fetchAll();

		$resultado = $con->query($sql);

		// Vamos imprimir os nossos resultados
		while ($row = $resultado->fetch()) {
		$postagem = '<div style="margin-right: 100px; margin-left: 100px; border: 2px solid black; border-radius: 6px;">
			<span><h4>postador: '.$row['user'].'</h4></span><br>
			'.$row['comentario'].'


		</div><br>';
		echo $postagem;}
		 ?>




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