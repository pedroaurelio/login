    
   <?php
//
        $data1 = $_POST["data1"];
        $data2 = $_POST["data2"];

        $dataa = implode("-",array_reverse(explode("/",$data1)));
        $datab = implode("-",array_reverse(explode("/",$data2)));

        $resultado=mysqli_query($conn, "SELECT * FROM visita WHERE entrada BETWEEN '$dataa' and '$datab'");
        $linhas=mysqli_num_rows($resultado);

        /*$nome=mysqli_query($conn,"SELECT * FROM visitante INNER JOIN visita ON visitante.id = id;");
        $nome2 = mysqli_fetch_array($nome);*/

    ?>

      <div class="container">
      <div class="page-header">
        <h1>Relatorio de Visita por dia</h1>
      </div>

      <div>
<a href ='administrativo.php?link=12'><button type='button' class='btn btn-primary glyphicon glyphicon-backward'>VOLTAR</button></a>
    </div>
    </br>
    </br>
    </br>

         <div class="row">
        <div class="col-md-12">
          <table class="table table-condensed table-hover" id="tabela_procurar">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Objetivo</th>
                <th>Entrada</th>
                <th>Saida</th>
                <th>Empresa</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($linhas = mysqli_fetch_array($resultado)){
                  echo "<tr>";
                      echo "<td>".$linhas['id_visita']."</td>";
                      //echo "<td>".$nome2['nome']."</td>";
                      echo "<td>".$linhas['objetivo']."</td>";
                     echo "<td>", date('d/m/Y H:i:s', strtotime($linhas['entrada'])), "</td>";
                     echo "<td>", date('d/m/Y H:i:s', strtotime($linhas['saida'])), "</td>";
                     echo "<td>".$linhas['empresa']."</td>";
                      ?> 
                      <td> 
                      <a href ='administrativo.php?link=13&id=<?php echo $linhas['id_visita']; ?>'><button type='button' class='btn btn-xs btn-primary'>Visualizar</button></a>
                      <?php
                  echo "</tr>";
              }
              ?>

              
            </tbody>
          </table>
        </div>
      </div>

    </div> <!-- /container -->


