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
  <div id="carouselExampleSlidesOnly" class="carousel slide backprincipal" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/slide-motorista.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <div class="container">
    <form method="GET" action="telamotorista.php">
      <div class="form-group row">
        <label for="inputText" class="col-sm-2 col-form-label">Seu nome</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="inputText" name="nome" required>
        </div>
        <label class="col-sm-2 col-form-label">Data de saída</label>
        <div class="col-sm-4">
          <input type="date" class="form-control" id="inputText" name="dt" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputText" class="col-sm-2 col-form-label">Endereço de destino</label>
        <div class="col-sm-10">
          <select type="text" class="form-control" id="inputText" name="destinomotorista" required>
            <option value="">Selecione o destino</option>
            <option value="Palhano, CE">Palhano, CE</option>
            <option value="Russas, CE">Russas, CE</option>
            <option value="Canindé, CE">Canindé, CE</option>
            <option value="Mossoró, RN">Mossoró, RN</option>
          </select>
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary mb-2">Quero dá carona</button>

    </form>
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