<?PHP include('menu.php'); ?>
<?PHP
session_start();
session_destroy(); # Destruir todas as sessões do navegador
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
<body>
<div class="container">
    <h1 class="purple-text text-darken-4">Saindo...</h1>    
<div class="progress">
      <div class="indeterminate"></div>
  </div>
  </div>
</body>      
</html>
<script type="text/javascript">
setTimeout("window.location='../index.html';",4000);
</script>