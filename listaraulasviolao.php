<?php

include('head.php');
include('menu.php');
include('config/conexao.php');

;?>
 
  <div class="container">
                       
                          <!-- aqui sempre conteudo -->
<br>
<div class="container"><br></div>
<div class="container"><br></div>

<div class="container"><br></div>

  <div id="main" class="container-fluid">
    
    <div id="top" class="row">
    <div class="col-md-3"><br>
        <h2>Aulas</h2>
    </div>
 

 
 
</div> <!-- /#top -->
 
     </hr>
   <div id="list" class="row">
 
   <?php

$resultado=mysqli_query($link,"SELECT * FROM aulas ORDER BY ID");
 if(empty($resultado)) {
?>
  <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                   <th>Id</th>
                    <th>Tema</th>
                    <th>E-mail</th>
                    <th>Data cadastro</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            
            <tbody>
       
            <td><h3>Não há Aulas</h3></td>
          
<?php

 } else {

 $linhas=mysqli_num_rows($resultado);
?>
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                   <th>Id</th>
                    <th>Aula</th>
                    <th>Tema</th>
                    <th>Data cadastro</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
            

<?php 



while($linhas = mysqli_fetch_array($resultado)) {

 echo "  <tr>
 <td>".$linhas['id']."</td>                  
 <td>".$linhas['numero']."</td>
 <td>".$linhas['tema']."</td>
 <td>".$linhas['criado']."</td>";?>
 <td class='actions'>
     <a class="btn btn-success btn-xs" href="login.php?id=<?php echo $linhas['id']?>">Assistir</a>
     
   
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