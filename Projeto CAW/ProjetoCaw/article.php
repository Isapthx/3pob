<?php
require_once 'header.php';
require_once 'db.php';


// Verificar se o artigo existe
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM articles WHERE id = $id";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    $article = $result->fetch_assoc();
  } else {
    header('Location: index.php');
    exit;
  }
} else {
  header('Location: index.php');
  exit;
}

// Exibir artigo
?>
<div class="container">
  <div class="row py-3">
    <div class="col-md-12">
      <h1><?= htmlspecialchars($article['title']) ?></h1>
      <p><?= htmlspecialchars($article['content']) ?></p>
      <p><small>Criado por <?= htmlspecialchars($article['author_username']) ?> em <?= htmlspecialchars($article['created_at']) ?></small></p>
    </div>
  </div>
</div>

<?php
require_once 'footer.php';
?>