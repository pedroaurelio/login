    
   <?php

        $resultado=mysqli_query($conn, "SELECT * FROM visitante ORDER BY 'id'");
        $linhas=mysqli_num_rows($resultado);
        
        
    ?>    
    
      <div class="container">
      <div class="page-header">
        <h1>Visitas em Andamento</h1>
      </div>
            
               

      
        <div class="row">
        <div class="col-md-12">
          <table class="table table-striped table-hover">
            <thead>
              <tr>                
                <th>Nome</th>
                <th>Empresa</th>
                <th>Objetivo</th>
                <th>Entrada</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($linhas = mysqli_fetch_array($resultado)){
                  echo "<tr>";                      
                      echo "<td>".$linhas['nome']."</td>";
                      echo "<td>".$linhas['nome_mae']."</td>";
                      echo "<td>".$linhas['data_nascimento']."</td>";
                      echo "<td>".$linhas['data_nascimento']."</td>";
                      ?> 
                      <td> 
                      <a href ='administrativo.php?link=5&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-xs btn-primary' title="Finalizar">Finalizar</button></a>

                      <a href ='administrativo.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-xs btn-warning' title="Editar">Editar</button></a>

                      <?php
                  echo "</tr>";
              }
              ?>

              
            </tbody>
          </table>
        </div>
      </div>

    </div> <!-- /container -->


