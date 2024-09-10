<?php
require_once 'header.php';
require_once 'db.php';

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  $username = $_SESSION['username'];
} else {
  header("Location: login.php");
  exit;
}

if (isset($_GET['id'])) {
  $article_id = $_GET['id'];
  $query = "SELECT * FROM articles WHERE id = $article_id";
  $result = $conn->query($query);
  $article = $result->fetch_assoc();

  if (!$article || $article['author_username'] != $username) {
    echo "<div class='container text-center'><h2>Você não tem permissão para editar este artigo!</h2></div>";
    exit;
  }
} else {
  echo "<div class='container text-center'><h2>Artigo não encontrado!</h2></div>";
  exit;
}

if (isset($_POST['edit_article'])) {
  $title = $_POST['title'];
  $content = $_POST['content'];

  // Verificar se uma nova imagem foi enviada
  if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $image = $_FILES['image'];
    $image_name = basename($image['name']);
    $image_tmp_name = $image['tmp_name'];
    $image_size = $image['size'];
    $image_type = $image['type'];

    // Verificar se a imagem é válida
    if ($image_type == 'image/jpeg' || $image_type == 'image/png') {
      // Armazenar a imagem no diretório de uploads
      $image_path = 'imagens/'. $image_name;
      move_uploaded_file($image_tmp_name, $image_path);

      // Atualizar o caminho da imagem no banco de dados
      $query = "UPDATE articles SET title = '$title', content = '$content', image = '$image_name' WHERE id = $article_id";
    } else {
      $error = 'Erro: Imagem inválida!';
    }
  } else {
    $query = "UPDATE articles SET title = '$title', content = '$content' WHERE id = $article_id";
  }

  if ($conn->query($query) === TRUE) {
    echo "Artigo editado com sucesso.";
    header("Location: user.php");
    exit;
  } else {
    echo "Erro ao editar artigo: " . $conn->error;
  }
}
?>

<div class="container">
  <h2 class="text-center">Editar Artigo</h2>
  <form action="edit_article.php?id=<?= $article_id?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="image">Imagem de capa (350x150)</label>
        <input type="file" name="image" id="image" accept="image/*" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">Título:</label>
      <input type="text" id="title" name="title" class="form-control" value="<?= htmlspecialchars($article['title'])?>" required>
    </div>
    <div class="form-group">
      <label for="content">Conteúdo:</label>
      <textarea id="content" name="content" class="form-control" required><?= htmlspecialchars($article['content'])?></textarea>
    </div>
    <input type="submit" name="edit_article" value="Editar Artigo" class="btn btn-primary">
  </form>
</div>
<?php
require_once 'footer.php';
?>
