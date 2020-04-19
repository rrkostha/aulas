<?php 
include_once("seguranca.php");
include_once("../config/conexao.php");
$nome=$_POST["nome"];
$celular=$_POST["celular"];

$senha=$_POST["senha"];
$query ="INSERT INTO users (senha,nome,senha,celular,criado) VALUES ('$senha','$nome','$celular',now())";
mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=listausuarios.php'><script type=\"text/javascript\">alert(\"Usurio cadastrado com Sucesso.\");<////////script>";

    } else {
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=listausuarios.php'><script type=\"text/javascript\">alert(\"Úsuário não cadastrado.\");</script>;";


		};



?>