<!-- user.php -->

<?php
require_once 'header.php';
require_once 'db.php';

if (session_status() == PHP_SESSION_ACTIVE) {
  $username = $_SESSION['username'];
  $query = "SELECT id FROM users WHERE username = '$username'";
  $result = $conn->query($query);
  $user_data = $result->fetch_assoc();
  $user_id = $user_data['id'];

  // Consulta para obter os artigos criados pelo usuário
  $query = "SELECT id, title, content FROM articles WHERE author_id = $user_id";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
   ?>
    <div class="container">
      <h1 class="text-center">Bem-vindo, <?= $username?></h1>
      <p class="text-center"><a href="create_article.php" class="btn btn-primary">Criar Artigo</a></p>

      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Ações</th>
              <th>Título</th>
              <th>Descrição</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($article = $result->fetch_assoc()) {?>
              <tr>
                <td>
                  <a href="edit_article.php?id=<?= $article['id']?>" class="btn btn-primary btn-sm">Editar</a>
                  <a href="delete_article.php?id=<?= $article['id']?>" class="btn btn-danger btn-sm">Excluir</a>
                </td>
                <td><?= $article['title']?></td>
                <td><?= substr($article['content'], 0, 50)?>...</td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>

    </div>

  <?php } else {
    ?>
    <div class="container">
      <h1 class="text-center">Bem-vindo, <?= $username?></h1>
      <p class="text-center"><a href="create_article.php" class="btn btn-primary">Crie um Artigo</a></p>
    <?php
    echo "<p class='text-center'>Você não tem artigos criados.</p>";
    ?> </div> <?php
  }
} else {
  header("Location: login.php");
  exit;
}
require_once 'footer.php';
?>