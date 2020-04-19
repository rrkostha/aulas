<?php
include('seguranca.php');
include('head.php');
include('menu.php');
include('../config/conexao.php');

?>
 
  <div class="container login">

  <div id="main" class="container-fluid">
    
    <div id="top" class="row">
    <div class="col-md-3"><br>
        <h2>Usuários</h2>
    </div>
 

 
 
</div> <!-- /#top -->
 
     </hr>
   <div id="list" class="row">
 
   <?php

$resultado=mysqli_query($link,"SELECT * FROM users ORDER BY ID");
 if(empty($resultado)) {
?>
  <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                   <th>Nome</th>
                    <th>Celular</th>
                  
                    <th>Data cadastro</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            
            <tbody>
       
            <td><h3>Não há usaurios</h3></td>
          
<?php

 } else {

 $linhas=mysqli_num_rows($resultado);
?>
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                  
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Data cadastro</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
            

<?php 



while($linhas = mysqli_fetch_array($resultado)) {

 echo "  <tr>
                
 <td>".$linhas['nome']."</td>
 <td>".$linhas['celular']."</td>
 <td>".$linhas['criado']."</td>";?>
 <td class='actions'>
    
     <a class="btn btn-warning btn-xs" href="editausuario.php?id=<?php echo $linhas['id']?>">Editar</a>
                                              

     <a class="btn btn-danger btn-xs" href="deletausuario.php?id=<?php echo $linhas['id']?>">Excluir </a>
     
   
 </td>
</tr>


<?php

}
                
} 
                    
  ?>            
         
              
             

            </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->

 </div>  <!-- /#main -->

 
                     
   </div>   

   

    <?php 
    
    include('footer.php');
    
    ;?>