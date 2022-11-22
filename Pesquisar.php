<?php
$servidor = "localhost";
	$usuario = "id19766429_descarteiuss";
	$senha = "n07FvlKSN{LmKE^X";
	$dbname = "id19766429_descarteiss";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisar = $_POST['pesquisar'];
	$result_cursos = "SELECT * FROM `projeto_descartei` WHERE NOME_RUA LIKE '%$pesquisar%' LIMIT 5";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
		echo "Local: ".$rows_cursos['NOME_RUA']."<br>";
		
	}
	
?>