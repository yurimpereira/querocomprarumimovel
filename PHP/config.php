<?php
    $conexao = mysqli_connect('localhost','root','root') or die("Erro de conexão");
    $banco = mysqli_select_db($conexao,'users') or die("Erro ao selecionar o banco de dados");
?>