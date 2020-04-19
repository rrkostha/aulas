<?php 
include_once("seguranca.php");
include_once("../config/conexao.php");
$numero=$_POST["numero"];
$linka=$_POST["link"];

$senha=$_POST["senha"];
$query ="INSERT INTO aulas (numero,link,senha,criado) VALUES ($numero,'$linka','$senha',now())";
mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=listaaulas.php'><script type=\"text/javascript\">alert(\"Aula cadastrado com Sucesso.\");<////////script>";

    } else {
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=listaaulas.php'><script type=\"text/javascript\">alert(\"Aula não cadastrado.\");</script>;";


		};



?>