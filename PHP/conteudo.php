
<?PHP
if(isset($_SESSION['nome_session']))
	{
		?>
		 <div class="borda2 padding20">
        	<img src="imagens/tesouro.jpg" width="200">
            <br>
            <br>
        	Aqui é o conteúdo restrito. <a href="logout.php"><strong>Sair</strong></a>
        </div>
        
		<?PHP
	}
else
	{
		?>
        <div class="borda1 padding20">
        	<img src="imagens/lock.png" width="200">
            <br>
            <br>
        	Esta é uma área restrita, por favor, <a href="login.php"><strong>efetue login</strong></a>.
        </div>
		<?PHP
	}
?>
