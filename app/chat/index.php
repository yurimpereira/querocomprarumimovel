<?PHP
session_start();
if(isset($_SESSION['nome_session']))
	{
		?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <link rel="stylesheet" href="../../css/master.css">
    <link rel="shortcut icon" href="../../images/logo.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Quero comprar um imóvel</title>
</head>
<?PHP

    $message = $_POST['message'];
    
?>
<body class="panel">
    <section class="chatpanel">
    <div class="row">
    <div class="col s12 m5">
      <div class="card-panel purple darken-4">
        <span class="white-text">
        <div class="row">    
        <span class="card-title"><h3><img class="circle responsive-img" src="../images/user.png">&nbsp;<?PHP echo $_SESSION['nome_session'];?></h3></span>
        </div>
        <div class="row">
            <?PHP
            echo $message;
        ?>
        </div>
        </span>
      </div>
    </div>
    </div>
    </section>
    <section class="bottom">
        <div class="navbar-fixed">
            <form action="index.php" method="post">
                <div class="container">
                    <div class="row">
                        <textarea id="textarea1" name="message" class="materialize-textarea col s9" placeholder="Digite aqui..."></textarea>
                        <button class="right btn-floating btn-large waves-effect waves-light yellow darken-3 pulse" type="submit"><i class="material-icons right">send</i></button>
                    </div>
                </div>
            </form>
            <nav class="purple darken-4">
                <div class="nav-wrapper">
                    <div class="container">
                        <div class="row">
                            <a href="../../PHP/conteudo.php" class="col s3">
                                <i class="fas fa-tachometer-alt fa-2x"></i>
                            </a>
                            <a href="index.php" class=" selected col s3">
                                <i class="fas fa-comments fa-2x"></i>
                            </a>
                            <a href="../../app/busca-imovel" class="col s3">
                                <i class="fas fa-search fa-2x"></i>
                            </a>
                            <a href="../../PHP/user-account.php" class="col s3">
                                <i class="far fas fa-user fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="../../js/materialize.js"></script>
    <script src="../../js/init.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>

</html>


<?PHP
}else{
    header("Location: ../../login.html");
}
		?>