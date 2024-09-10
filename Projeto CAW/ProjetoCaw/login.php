<?php
require_once 'header.php';
require_once 'db.php';
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Verificar se o usuário existe
  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $user_data['id']; // Defina $_SESSION['id'] com o valor da coluna id
    $_SESSION['logged_in'] = true;
    header("Location: index.php");
    exit;
  } else {
    echo "Usuário ou senha incorretos.";
  }
}
?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="login.php" method="post">
        <div class="form-group">
          <label for="username">Usuário:</label>
          <input type="text" id="username" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Senha:</label>
          <input type="password" id="password" name="password" class="form-control">
        </div>
        <button type="submit" name="login" class="btn btn-primary">Logar</button>
      </form>
    </div>
  </div>
</div>

<?php require_once 'footer.php';?>