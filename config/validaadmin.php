<?php
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];

include_once("conexao.php");
$result = mysqli_query($link,"SELECT * FROM users WHERE email='$email' AND senha='$senha' LIMIT 1");
$resultado =  mysqli_fetch_array($result);
//echo "Usuario: ".$resultado['nome'];
if(empty($resultado)){
  
  echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=../admin/login.php'><script type=\"text/javascript\">alert(\"Usuário ou Senha inválida.\");</script>";
 

} else {
  $_SESSION['userid'] = $resultado['id'];
  $_SESSION['email'] = $resultado['email'];
  $_SESSION['admin'] = true;


 echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=../admin/index.php'>";
 


}


  ;?>