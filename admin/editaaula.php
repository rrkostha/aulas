<?php
include('seguranca.php');
include_once("../config/conexao.php");
include('head.php');
include('menu.php');
$id=$_GET['id'];
$resultado=mysqli_query($link,"SELECT * FROM aulas WHERE id=$id");
$linhas = mysqli_fetch_array($resultado)


?>
 
  <div class="container login">

  <div id="main" class="container">
 <h3 class="page-header">Editar aula</h3>


   <form action="editaula.php" method="POST" autocomplete="off">
          



           <div class="row">
                                      <div class="form-group col-md-2">  
                                      <label for="campo1">Numero da aula</label>
                                      </div>
                                      <div class="form-group col-md-2">  
                                        <input type="text" class="form-control" placeholder="Numero" id="numero" name="numero" value="<?php echo $linhas['numero'] ;?>"  required>
                                        <input type="hidden" name="id" value="<?php echo $linhas['id'] ;?>">
                                        </div>
                                        <div class="form-group col-md-2">  
                                      <label for="campo1">Senha da aula </label>
                                      </div>
                                      <div class="form-group col-md-4">  
                                        <input type="text" class="form-control" placeholder="senha" id="login" name="senha" value="<?php echo $linhas['senha'] ;?>" required>
                                        </div>
           </div>

					 		<div class="row">


							<div class="form-group col-md-1">     


                     <label for="campo1">link</label>
                                      </div>   
                                      	<div class="form-group col-md-6">          
                                        <input type="text" class="form-control" placeholder="link da aula " id="email" name="link" value="<?php echo $linhas['link'] ;?>" required>
									</div>
               </div>
          
         



          
			

         
         <hr>
                                                      <div id="actions" class="row">
                                                        <div class="col-md-12">
                                                          <button type="submit" class="btn btn-primary">Editar</button>
                                                           <a href="listaaulas.php" class="btn btn-secondary"><i class="fa fa-list-alt"></i> Lista todos</a>
                                                          <a href="index.php" class="btn btn-default">Cancelar</a>
                                                        </div>
                                                      </div>
                                                    </form>
                                                 </div>






		 <!-- fim do conteudo -->



				</div>



 
                     
   </div>   

   

    <?php 
    
    include('footer.php');
    
    ;?>