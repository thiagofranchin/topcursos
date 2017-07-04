<!DOCTYPE html>
<html lang="pr-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Top Cursos</title>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.min.css"> </head>

<body class="index">
    <div class="container index-page">

      <div class="formulario">        

        <form class="form-group" action="login.php" method="post">
          <div class="box-form">
            <?php
              if($_GET['acesso'] == "vazio"){ 
                echo '<div class="alert alert-danger" role="alert"><i class="ing ing-exclamation-triangle"></i> Todos os campos devem ser preenchidos!</div>';}
              else if($_GET['acesso'] == "error"){
                echo '<div class="alert alert-warning" role="alert"><i class="ing ing-thumb-down-o"></i> Login e senha não conferem...</div>';
              }else if($_GET['acesso'] == "logout"){
                echo '<div class="alert alert-info" role="alert"><i class="ing ing-smile-o"></i> Volte sempre!!! </div>';            
              }
            ?>
            <input type="text" name="login" class="form-control form-control-lg mt-3" placeholder="Login">          
            <input type="password" name="password" class="form-control form-control-lg mt-3" placeholder="Senha">          
          <button href="#" type="submit" name="entrar" class="btn btn-lg btn-warning btn-block mt-3">Entrar</button>
          </div>
        </form>

      </div>
    </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/tether/dist/js/tether.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="js/functions.js"></script>
</body>

</html>