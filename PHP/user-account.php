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
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
    <title>Quero comprar um imóvel</title>
</head>

<body class="panel">
    <div class="navbar-fixed">
        <nav class="purple darken-4">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="#!" class="left brand-logo">
                        <img class="logo-top-horizontal" src="../images/logo-horizontal.png">
                    </a>
                    <a href="#" class=" right butons-icon">
                        <i class="far fa-bell fa-2x"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div class="navbar-fixed">
        <nav class="purple darken-4">
            <div class="nav-wrapper">
                <div class="container">
                    <div class="row">
                        <a href="#!" class="col s3">
                            <i class="fas fa-tachometer-alt fa-2x"></i>
                        </a>
                        <a href="chat.php" class="col s3">
                            <i class="fas fa-comments fa-2x"></i>
                        </a>
                        <a href="../app/busca-imovel" class="col s3">
                            <i class="fas fa-search fa-2x"></i>
                        </a>
                        <a href="user-account.php" class="selected col s3">
                            <i class="far fas fa-user fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class=" center container">
            <!--aqui entra um while-->
        <a href="logout.php">Sair</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>

</html>


<?PHP
}else{
    header("Location: ../login.html");
}
		?>