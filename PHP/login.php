<?PHP
include('config.php');
# Validar os dados do usuário

function anti_sql_injection($string)
	{
		include('config.php');
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysqli_real_escape_string($conexao,$string);
		return $string;
	}

$sql = mysqli_query($conexao,"select * from user where email='".anti_sql_injection($_POST['email'])."' and senha='".anti_sql_injection($_POST['senha'])."' limit 1") or die("Erro");
$linhas = mysqli_num_rows($sql);
if($linhas == '')
	{
		header("Location: ../login-error.html");
		?>
		<?php
	}
else
	{
		while($dados=mysqli_fetch_assoc($sql))
			{
				session_start();
				$_SESSION['nome_session'] = $dados['nome'];
				$_SESSION['sobrenome_session'] = $dados['sobrenome'];
				$_SESSION['email_session'] = $dados['email'];
				$_SESSION['senha_session'] = $dados['senha'];
				header("Location: user-panel.php");
			}
	}
?>