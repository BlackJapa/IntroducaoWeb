<?php
	$nome = $_POST['nome'];
	$login = $_POST['email'];
	$senha = $_POST['senha'];
	try{
    	$con = new PDO("mysql:host=l2raven.servegame.com:3306;dbname=fatec", "fatec", "web1234");     
   	 	$con->exec("set names utf8");	
		$sql = "INSERT INTO cadastroderyk(nome, email, senha) VALUES(:nome, :email, :senha)";
		$stmt = $con->prepare( $sql );
		$stmt->bindParam( ':nome', $nome );
		$stmt->bindParam( ':email', $login );
		$stmt->bindParam( ':senha', $senha );
	echo "<br>";	

	$result = $stmt->execute();
	if ( ! $result )
	{
		var_dump( $stmt->errorInfo() );
		exit;
	}
	 
	echo $stmt->rowCount() . "linhas inseridas";
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}




	<!--<?php  
			$con = new PDO("mysql:host=l2raven.servegame.com:3306;dbname=fatec", "fatec", "web1234");     
   	 		$con->exec("set names utf8");	
   	 		$sqlNoticias = $con->prepare('SELECT * FROM cadastroderyk');
		$sqlNoticias->execute();
		$resultadoSqlNoticias = $sqlNoticias->fetchAll();
		var_dump($resultadoSqlNoticias) ;
   	 	?>-->
		?>