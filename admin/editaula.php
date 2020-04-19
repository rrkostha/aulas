<?php 
include_once("seguranca.php");
include_once("../config/conexao.php");
$numero=$_POST["numero"];
$linka=$_POST["link"];
$ids=$_POST['id'];
$senha=$_POST["senha"];
$query ="UPDATE aulas SET numero=$numero,senha='$senha',link='$linka',modificado=now() where id=$ids";
mysqli_query($link,$query) or die('Erro ao inserir os dados '.mysqli_error($link));
		$linhas2=mysqli_affected_rows($link);
		if ($linhas2>=1) {	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=listaaulas.php'><script type=\"text/javascript\">alert(\"Aula alterada com Sucesso.\");<////////script>";

    } else {
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=listaaulas.php'><script type=\"text/javascript\">alert(\"Não foi possível alterar.\");</script>;";


		};



?>