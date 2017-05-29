<?php
  session_start();
  require_once("seguranca.php");
  require_once("conexao.php");  
  echo "Usuario: ". $_SESSION['usuarioNome']; 
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SISTEMA PACIENTES SEPOAD</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jasny-bootstrap.min.css" rel= "stylesheet" media= "screen" >

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>  

    <?php
        require_once("menu_admin.php");        
         
         
        $pag[1] = "bem_vindo.php";
        $pag[2] = "procurar.php";
        $pag[3] = "cad_paciente.php";
        $pag[4] = "edit_paciente.php";
        $pag[5] = "visual_paciente.php";
        $pag[6] = "cad_categoria.php";
        $pag[7] = "listar_categoria.php";
        $pag[8] = "visual_categoria.php";
        $pag[9] = "edit_categoria.php"; 
      

      
      

     if(isset($_GET['link'])){
      $link = $_GET['link'];
          
         if(file_exists($pag[$link])){
           include $pag[$link];
            }else{ 
              include('bem-vindo.php');
             } 
           }else{ 
            include('bem-vindo.php'); 
         }


    ?>
                  
      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src= "js/jasny-bootstrap.min.js" > </script>
    
    
  </body>
</html>
<br />
<a href="sair.php"> Sair</a>
