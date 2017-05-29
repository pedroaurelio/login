<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$nome = $_POST["nome"];
$nome_mae = $_POST["nome_mae"];
$nome_pai = $_POST["nome_pai"];
$sexo = $_POST["sexo"];
$data_nascimento = $_POST["data_nascimento"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$query=mysqli_query($conn,"INSERT INTO pacientes (nome, nome_mae, nome_pai, sexo, data_nascimento, email, endereco, telefone) VALUES ('$nome', '$nome_mae','$nome_pai', '$sexo', '$data_nascimento', '$email', '$endereco', '$telefone')");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </head>
    </head>

    <body>
      <div class="container theme-showcase" role="main">
    <?php    
    
    if(mysqli_affected_rows($conn) > 0){ ?>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Usuário cadastrado com Sucesso!</h4>
            </div>
            <div class="modal-body">
              <?php echo $nome; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Corrigir Cadastro</button>
              <a href="http://localhost/login/administrativo.php?link=2"><button type="button" class="btn btn-success">Ok</button></a>
            </div>
          </div>
        </div>
      </div>        
      <script>
        $(document).ready(function () {
          $('#myModal').modal('show');
        });
      </script>
    <?php }else{ ?>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Erro ao cadastrar o usuário!</h4>
            </div>
            <div class="modal-body">                
              <?php echo $nome; ?>
            </div>
            <div class="modal-footer">
              <a href="http://localhost/login/administrativo.php?link=2"><button type="button" class="btn btn-danger">Ok</button></a>
            </div>
          </div>
        </div>
      </div>      
      <script>
        $(document).ready(function () {
          $('#myModal').modal('show');
        });
      </script>
    <?php } ?>
  
  
    </div>
    </body>
</html> 

?>
