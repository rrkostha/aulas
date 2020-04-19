<?php
include('config/conexao.php');
include('head.php');
include('menu.php');
$id=$_GET['id'];

;?>
 
  <div class="container login">


  <div class="container">
  <div class="row">
    <div class="col-sm">
   
    </div>
    <div class="col-sm">
    <form class="form-signin" method="post" action="config/valida.php">
    <input type="hidden" name="idt" value="<?php echo $id;?>">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal center">Faça login</h1>
      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Nome" name="nome" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha" senha required>
      <div class="checkbox mb-3">
        <label>
        
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
    </div>
    <div class="col-sm">
     
    </div>
  </div>
</div>







       

    </div>

    <?php 
    
    include('footer.php');
    
    ;?>