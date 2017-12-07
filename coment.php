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

<?php
$user = $_POST['nome'];
$mail = $_POST['email'];
$coment = $_POST['coment'];



//$noticia = $_SESSION['email'];

try{
    $con = new PDO("mysql:host=l2raven.servegame.com:3306;dbname=fatec", "fatec", "web1234");     
    $con->exec("set names utf8");	
	$sql = 'INSERT INTO comentarios(user, mail, comentario) VALUES(:user, :mail, :comentario)';
	$stmt = $con->prepare( $sql );
	$stmt->bindParam( ':user', $user );
	$stmt->bindParam( ':mail', $mail );
	$stmt->bindParam( ':comentario', $coment );

	$result = $stmt->execute();
	if ( ! $result )
	{
		var_dump( $stmt->errorInfo() );
		exit;
    }	
    	echo " DEU CERTO"; 
        echo "<script>show1();</script>";//locationlocation.href='index.php';</script>";

	 
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();

        echo "<script>location.href='index.php';</script>";
}



?>