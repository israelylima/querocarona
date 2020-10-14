<?php


include ("../class/conn.php");

?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Quero carona!</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="../img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="#">Eu quero uma carona</a>
        <a class="nav-link active" href="#">Eu quero dá a carona</a>
      </div>
    </div>
  </nav>


  <?php 

  //pegando as informações dos campos de pesquisa
  $destinomotorista = $_GET['destinomotorista'];
  $dt = $_GET['dt'];
  $nome = $_GET['nome'];


  //cadastro do motorista 
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO motorista (nome, dt, destinomotorista) VALUES(:nome, :dt, :destinomotorista)');
  $stmt->execute(array(
    ':nome' => $nome, ':dt' => $dt, ':destinomotorista' => $destinomotorista)
  );
  // fim do cadastro do motorista


  $query = $pdo->query("SELECT * FROM usuario");
  
  $query->execute(); 
  
  ?>

  <div class="container">
    
    <h2>Olá <?php echo ($nome); ?></h2>


    <?php 

    while ($listar = $query->fetch(PDO::FETCH_OBJ)){
      if (($listar->destino == $destinomotorista) AND ($listar->dt == $dt)){
        echo ('
          <div class="alert alert-primary" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>

          <h4 class="alert-heading">'.$listar->nome.' precisa da sua carona</h4>

          <p>Data: '.$listar->dt.'</br> Destino: '.$listar->destino.'</p>
          <hr>
          <form action="caronaconfirmada.php" method="GET">
            <p class="mb-0"><button name="idusuario" value="'.$listar->idusuario.'" type="submit" class="btn btn-primary mb-2">Quero dá carona</button></p>
          </form>
          </div>
          ');
      }
    }

    ?> 
  </div>


  <!-- Footer -->
  <footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright. Desenvolvido por Clara e Israely
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html> 