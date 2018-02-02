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
                    <a href="#!" class="brand-logo">
                        <img class="logo-top" src="../images/logo-branca.png">
                    </a>
                    <a href="logout.php" class="right butons-icon">
                        <i class="fas fa-sign-out-alt fa-2x"></i>
                    </a>
                    <a href="#" class=" right butons-icon">
                        <i class="far fa-bell fa-2x"></i>
                    </a>
                </div>
        </nav>
        </div>
        <div class="center">
            <p class="purple-text text-darken-4">Bem vindo(a)
                <?php echo $_SESSION['nome_session']?>
            </p>
        </div>
        <div class="row">
        <div class="col s12 l2 xl1">
                    <ul>
                        <a href="imovel-search.html" class="white-text">
                            <li class="pannel-btn center purple darken-4">
                                <i class="fas fa-search fa-3x"></i>
                                <p>Encontrar imóveis</p>
                            </li>
                        </a>
                        <a href="chat.php" class="white-text">
                            <li class="pannel-btn center purple darken-4">
                                <i class="fas fa-comments fa-3x"></i>
                                <p>Chats</p>
                            </li>
                        </a>
                        <a href="account.php" class="white-text">
                            <li class="pannel-btn center purple darken-4">
                                <i class="fas fa-user fa-3x"></i>
                                <p>Minha conta</p>
                            </li>
                        </a>
                        <a href="suporte.html" class="white-text">
                            <li class="pannel-btn center purple darken-4">
                                <i class="fab fa-whmcs fa-3x"></i>
                                <p>Suporte</p>
                            </li>
                        </a>
                    </ul>
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
