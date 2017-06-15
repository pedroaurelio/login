<!-- Static navbar -->
    <nav class="navbar navbar-static-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="administrativo.php">CONTROLE DE VISITANTES</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <li class="active"><a href="administrativo.php?link=1">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="administrativo.php?link=11">Visita</a></li>
                <li><a href="administrativo.php?link=3">Visitante</a></li>
                <li><a href="administrativo.php?link=6">Setor</a></li>
                </ul>
                <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listar <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="administrativo.php?link=2">Visitante</a></li>
                <li><a href="administrativo.php?link=7">Setor</a></li>
                </ul>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatorios <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Pacientes</a></li>
                <li><a href="#">Consultas</a></li>
                <li><a href="#">Algo a mais</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
              <li><a href="sair.php">Sair</a></li>
            </li> 

            <li> <a class="pull-right"> <?php
            echo "Usuario: ". $_SESSION['usuarioNome']; 
            ?> </a>
            </li>
          </ul>
          </ul>
          </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>