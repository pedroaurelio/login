
    <div class="container">
       
      
      <div class="page-header">
        <h1>Cadastrar Paciente</h1>

      </div>
      <div class="row espaco">
        <div class="pull-right">
          <a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'> <button type='button' class='btn btn-sm btn-info'> Listar</button></a><br></br>
         </div>

      <div class="row">
        <div class="col-md-12">
		    <form class="form-horizontal" method="POST" action="processa/processa_cad_paciente.php">
  <div class="form-group  has-feedback">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control text-uppercase" name="nome" placeholder="Nome Completo">
      <span class="form-control-feedback" aria-hidden="true"></span>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome da Mae</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome_mae" placeholder="Nome da Mae">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome do Pai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome_pai" placeholder="Nome do Pai">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Sexo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="sexo" placeholder="Sexo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Data de Nascimento</label>
    <div class="col-sm-10">
      <input type= "text" class= "form-control" name= "data_nascimento" data-mask= "99/99/9999" placeholder="Data de Nascimento">  
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Endereço</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="endereco" placeholder="Endereço">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="telefone" placeholder="Telefone">
    </div>
  </div>
  
  <div class="form-group">

  
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>
</form>
        </div>
      </div>

    </div> <!-- /container -->
