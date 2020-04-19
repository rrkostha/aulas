<?php 
include_once("seguranca.php");
include_once("../config/conexao.php");
$nome=$_POST["nome"];
$celular=$_POST["celular"];
$ids=$_POST['id'];
$senha=$_POST["senha"];
$query ="UPDATE users SET senha='$senha',nome='$nome',celular='$celular',modificado=now() where id=$ids";
mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=listausuarios.php'><script type=\"text/javascript\">alert(\"Usuários alterada com Sucesso.\");<////////script>";

    } else {
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=listausuarios.php'><script type=\"text/javascript\">alert(\"Não foi possível alterar.\");</script>;";


		};



?>