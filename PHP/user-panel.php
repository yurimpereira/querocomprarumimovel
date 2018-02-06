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
                        <a href="#!" class="selected col s3">
                            <i class="fas fa-tachometer-alt fa-2x"></i>
                        </a>
                        <a href="chat.php" class="col s3">
                            <i class="fas fa-comments fa-2x"></i>
                        </a>
                        <a href="../app/busca-imovel" class="col s3">
                            <i class="fas fa-search fa-2x"></i>
                        </a>
                        <a href="user-account.php" class="col s3">
                            <i class="far fas fa-user fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
 
    <div class="row">
        <div class="col s12 m6">
        <a href="chats.php">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Chats</span>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="card">
                                <div class="card-content">
                                    <!--aqui entra um while-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>   
        </div>
    </div>
    <footer class="page-footer purple darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">Link 1</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">Link 2</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">Link 3</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright center">
            <div class="container">
                © 2018
                <a href="http://cluemidiadigital.com.br">Clue Midia Digital</a>
            </div>
        </div>
    </footer>

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