<?php
$name = $_POST['nome'];
$senha = $_POST['senha'];
$idt = $_POST['idt'];
include_once("conexao.php");
$result = mysqli_query($link,"SELECT * FROM aulas WHERE id='$idt' AND senha='$senha' LIMIT 1");
$resultado =  mysqli_fetch_array($result);
//echo "Usuario: ".$resultado['nome'];
if(empty($resultado)){
  
  echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=../listaraulasviolao.php'><script type=\"text/javascript\">alert(\"Senha inválida.\");</script>";
 

} else {
  $link=$resultado['link'];
  echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=$link'>";


}


  ;?>