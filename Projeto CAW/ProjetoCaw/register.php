<?php
require_once 'header.php';

// Conexão ao banco de dados
require_once 'db.php';

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Verificar se o usuário já existe
  $query = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    echo "<div class='alert alert-danger'>Usuário já existe.</div>";
  } else {
    // Criar novo usuário
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $conn->query($query);
    echo "<div class='alert alert-success'>Usuário criado com sucesso.</div>";
  }
}
?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="register.php" method="post">
        <div class="form-group">
          <label for="username">Usuário:</label>
          <input type="text" id="username" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Senha:</label>
          <input type="password" id="password" name="password" class="form-control">
        </div>
        <button type="submit" name="register" class="btn btn-primary">Registrar</button>
      </form>
    </div>
  </div>
</div>

<?php require_once 'footer.php';?>