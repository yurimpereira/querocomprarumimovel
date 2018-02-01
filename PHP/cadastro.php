<?php
include 'config.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$senha = $_POST['senha'];
$confirmation = $_POST['confirmation'];
$email = $_POST['email'];


if($senha == $confirmation){
    $in = mysqli_query($conexao,"insert into user (nome, sobrenome, senha, email) values ('$nome','$sobrenome','$senha', '$email')") or die("Erro");
    header('Location:../sucess.html');
    

}else{
    header('Location:../error.html');
}


?>