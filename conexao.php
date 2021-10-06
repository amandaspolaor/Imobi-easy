
<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "admin";
	$dbname = "web";

	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if($conn->connect_error){
	die("falha na conexao" . $conn->connect_error);
}
?>