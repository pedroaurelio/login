<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = $_POST["id"];
$nome = $_POST["nome"];
$query=mysqli_query($conn,"UPDATE categorias set nome ='$nome', modified = NOW()  WHERE id='$id' ");
?>
<!DOCTYPE html>
<html lan="pt-br">
	<head>
		<meta charset="utf-8">
		</head>

		<body>
			<?php
			if(mysqli_affected_rows($conn))
				{
			echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/login/administrativo.php?link=7'>
					<script type=\"text/javascript\">
						alert(\"Categoria de Produto editado com Sucesso.\");
					</script>
				 ";
				}
					else
			{
				 	echo "
				 	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/login/administrativo.php?link=7'>
					<script type=\"text/javascript\">
						alert(\"Categoria de Produto nao foi Editado com Sucesso.\");
					</script>

				 	";
			}
				?>
		</body>
</html>
