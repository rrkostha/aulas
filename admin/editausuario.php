<?php
include('seguranca.php');
include_once("../config/conexao.php");
include('head.php');
include('menu.php');
$id=$_GET['id'];
$resultado=mysqli_query($link,"SELECT * FROM users WHERE id=$id");
$linhas = mysqli_fetch_array($resultado)

?>
 
  <div class="container login">

  <div id="main" class="container">
 <h3 class="page-header">Editar usuario</h3>


   <form action="edituser.php" method="POST" autocomplete="off">
          



           <div class="row">
                                      <div class="form-group col-md-1">  
                                      <label for="campo1">Nome</label>
                                      </div>
                                      <div class="form-group col-md-3">  
                                        <input type="text" class="form-control" placeholder="Nome" id="numero" name="nome"value="<?php echo $linhas['nome'] ;?>"  required>
                                        </div>
                                        <div class="form-group col-md-1">  
                                      <label for="campo1">Celular </label>
                                      </div>
                                      <div class="form-group col-md-4">  
                                        <input type="text" class="form-control" placeholder="Celular" id="login" name="celular"  value="<?php echo $linhas['celular'] ;?>" required>
                                        <input type="hidden" name="id" value="<?php echo $linhas['id'] ;?>">
                                        </div>
           </div>

					 		<div class="row">


							<div class="form-group col-md-1">     


                     <label for="campo1">Senha</label>
                                      </div>   
                                      	<div class="form-group col-md-4">          
                                        <input type="password" class="form-control" placeholder="senha " id="email" name="senha" value="<?php echo $linhas['senha'] ;?>"  required>
									</div>
               </div>
          
         



          
			

         
         <hr>
                                                      <div id="actions" class="row">
                                                        <div class="col-md-12">
                                                          <button type="submit" class="btn btn-primary">Editar</button>
                                                           <a href="listausuarios.php" class="btn btn-secondary"><i class="fa fa-list-alt"></i> Lista todos</a>
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