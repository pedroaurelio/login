<?php
    $id = $_GET['id'];

    // Executa a consulta
    $result=mysqli_query($conn,"SELECT * FROM categorias WHERE id='$id' LIMIT 1");
    $resultado=mysqli_fetch_assoc($result);
 
?>  
      <div class="container">
       
      
      <div class="page-header">
        <h1>Editar Categoria</h1>

      </div>
      <div class="row espaco">
        <div class="pull-right">
          <a href='administrativo.php?link=7'> <button type='button' class='btn btn-sm btn-info'> Listar</button></a>
          
          <a href='processa/processa_apagar_cat_prod.php?id=<?php echo $resultado['id'];?>'> <button type='button' class='btn btn-sm btn-danger'> Apagar</button></a>
          </div>
          </div>
      <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="processa/processa_edit_cat_prod.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome" placeholder="Nome Completo" value ="<?php echo $resultado['nome']; ?>">
    </div>
  </div>
  
  <input type="hidden" name="id" value="<?php echo $resultado['id'];?>">

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Editar</button>
    </div>
  </div>
</form>
        </div>
      </div>

    </div> <!-- /container -->


    