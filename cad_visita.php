  <?php
    $id = $_GET['id'];

    // Executa a consulta
    $result=mysqli_query($conn,"SELECT * FROM visitante WHERE id='$id' LIMIT 1");
    $resultado=mysqli_fetch_assoc($result);
 
?>
        <div class="container">
       
      
      <div class="page-header">
        <h1>Editar Visitante</h1>

      </div>
      <div class="row espaco">
        <div class="pull-right">          
          </div>
      <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="processa/processa_edit_visitante.php">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome" placeholder="Nome Completo" value ="<?php echo $resultado['nome']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Empresa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="empresa" placeholder="Empresa" value ="<?php echo $resultado['empresa']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome do Pai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="objetivo" placeholder="objetivo">
    </div>
  </div>




<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Procurar Visitante
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body"> 

          <?php

         $resultado=mysqli_query($conn, "SELECT * FROM visitante ORDER BY 'id'");
        $linhas=mysqli_num_rows($resultado); 

    ?>    

      <div class="container">
      <div class="page-header">
        <h1>Procurar Visitante</h1>
      </div>
          


      <div class="row">
        <div class="pull-center">
          <a href='administrativo.php?link=3'><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
          </div>
          </div>
          </br>
          </br>     

      
        <div class="row">
        <div class="col-md-6">
          <table class="table table-condensed table-hover" id="tabela_procurar">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nome Mae</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($linhas = mysqli_fetch_array($resultado)){
                  echo "<tr>";
                      echo "<td>".$linhas['id']."</td>";
                      echo "<td>".$linhas['nome']."</td>";
                      echo "<td>".$linhas['nome_mae']."</td>";
                      echo "<td>".$linhas['data_nascimento']."</td>";
                      ?> 
                      <td> 
                      <a href ='administrativo.php?link=11&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-xs btn-primary'>Inserir</button></a>

                      <?php
                  echo "</tr>";
              }
              ?>

              
            </tbody>
          </table>
        </div>
      </div>

    </div> <!-- /container -->
      </div>      
    </div>
  </div>
</div> 
<div> 
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </div>

</form>
        </div>
      </div>

    </div> <!-- /container -->
