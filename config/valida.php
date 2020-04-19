<?php
$celular = $_POST['celular'];
$senha = $_POST['senha'];
$idt = $_POST['idt'];
include_once("conexao.php");
$result = mysqli_query($link,"SELECT * FROM aulas WHERE id='$idt' AND senha='$senha' LIMIT 1");
$resultado =  mysqli_fetch_array($result);
//echo "Usuario: ".$resultado['nome'];
if(empty($resultado)){
  
  echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=../listaraulasviolao.php'><script type=\"text/javascript\">alert(\"Senha inválida.\");</script>";
 

} else {  

  $busca = mysqli_query($link,"SELECT * FROM users WHERE celular='$celular'  LIMIT 1");
  $conteudo =  mysqli_fetch_array($busca);

  if(empty($conteudo)) {
     
  echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=../listaraulasviolao.php'><script type=\"text/javascript\">alert(\"Celular não cadastrado.\");</script>";


   } else {
    $link=$resultado['link'];
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=$link'>";


  }
 

}


  ;?>