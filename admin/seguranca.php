<?php
session_start();
if(( $_SESSION['email'] == "") || ($_SESSION['email'] == false)  || ($_SESSION['admin']== false) ){  

  unset($_SESSION['email'],			
  $_SESSION['userid'], 		
  $_SESSION['admin']);
  echo "<META HTTP-EQUIV=REFRESH CONTENT = '0; URL=../admin/login.php'><script type=\"text/javascript\">alert(\"Usuário ou Senha inválida.\");</script>";

}

;?>