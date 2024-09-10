<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  $username = $_SESSION['username'];
} else {
  $username = null;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>MUSICAST | Site de notícias musicais</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="imagens/logo.jpg" alt="Musicast">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> Sobre</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php 
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
          $username = $_SESSION['username'];
          echo "<li class='nav-item'><a class='nav-link' href='user.php'><i class='fas fa-user'></i> $username</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='logout.php'><i class='fas fa-lock-open'></i> Logout</a></li>";
        } else {
          echo "<li class='nav-item'><a class='nav-link' href='login.php'><i class='fas fa-user'></i> Login</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='register.php'><i class='fas fa-user-plus'></i> Registrar</a></li>";
        }
      ?>
      
    </ul>
  </div>
</nav>
