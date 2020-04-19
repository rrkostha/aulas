<?php
include('seguranca.php');
include('head.php');
include('menu.php');

?>
 
  <div class="container login">

  <div id="main" class="container">
 <h3 class="page-header">Cadastro de aulas</h3>


   <form action="cadaula.php" method="POST" autocomplete="off">
          



           <div class="row">
                                      <div class="form-group col-md-2">  
                                      <label for="campo1">Numero da aula</label>
                                      </div>
                                      <div class="form-group col-md-2">  
                                        <input type="text" class="form-control" placeholder="Numero" id="numero" name="numero"  required>
                                        </div>
                                        <div class="form-group col-md-2">  
                                      <label for="campo1">Senha da aula </label>
                                      </div>
                                      <div class="form-group col-md-4">  
                                        <input type="text" class="form-control" placeholder="senha" id="login" name="senha"  required>
                                        </div>
           </div>

					 		<div class="row">


							<div class="form-group col-md-1">     


                     <label for="campo1">link</label>
                                      </div>   
                                      	<div class="form-group col-md-6">          
                                        <input type="text" class="form-control" placeholder="link da aula " id="email" name="link"  required>
									</div>
               </div>
          
         



          
			

         
         <hr>
                                                      <div id="actions" class="row">
                                                        <div class="col-md-12">
                                                          <button type="submit" class="btn btn-primary">Cadastrar</button>
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