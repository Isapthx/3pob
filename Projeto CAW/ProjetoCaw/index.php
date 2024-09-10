<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  $username = $_SESSION['username'];
  chmod('imagens', 0777);
} else {
  $username = null;
}
require_once 'header.php';
require_once 'db.php';

// Consulta para obter os artigos
$query = "SELECT * FROM articles ORDER BY created_at DESC";
$result = $conn->query($query);

echo '<div class="container">
  <div class="row py-3">
    <div class="col-md-12">
      <form action="" method="get" class="form-inline">
        <label for="filter" class="mr-2">Filtrar por:</label>
        <select id="filter" name="filter" class="form-control mr-2">
          <option value="author_asc">Autor (A-Z)</option>
          <option value="author_desc">Autor (Z-A)</option>
          <option value="title_asc">Título (A-Z)</option>
          <option value="title_desc">Título (Z-A)</option>
          <option value="created_at_asc">Mais antigo</option>
          <option value="created_at_desc">Mais recente</option>
        </select>
        <label for="author" class="mr-2">Autor:</label>
        <input type="text" id="author" name="author" class="form-control mr-2">
        <button type="submit" class="btn btn-primary">Filtrar</button>
      </form>
    </div>
  </div>
</div>';

// Modificar consulta SQL para ordenar os artigos de acordo com o filtro selecionado
if (isset($_GET['filter']) && isset($_GET['author'])) {
  switch ($_GET['filter']) {
    case 'author_asc':
      $query = "SELECT * FROM articles WHERE author_username LIKE '%". $_GET['author']. "%' ORDER BY author_username ASC";
      break;
    case 'author_desc':
      $query = "SELECT * FROM articles WHERE author_username LIKE '%". $_GET['author']. "%' ORDER BY author_username DESC";
      break;
    case 'title_asc':
      $query = "SELECT * FROM articles WHERE author_username LIKE '%". $_GET['author']. "%' ORDER BY title ASC";
      break;
    case 'title_desc':
      $query = "SELECT * FROM articles WHERE author_username LIKE '%". $_GET['author']. "%' ORDER BY title DESC";
      break;
    case 'created_at_asc':
      $query = "SELECT * FROM articles WHERE author_username LIKE '%". $_GET['author']. "%' ORDER BY created_at ASC";
      break;
    case 'created_at_desc':
      $query = "SELECT * FROM articles WHERE author_username LIKE '%". $_GET['author']. "%' ORDER BY created_at DESC";
      break;
    default:
      $query = "SELECT * FROM articles WHERE author_username LIKE '%". $_GET['author']. "%' ORDER BY created_at DESC";
  }
} else {
  $query = "SELECT * FROM articles ORDER BY created_at DESC";
}

// Executar consulta SQL
$result = $conn->query($query);
?>
<div class="container">
  <div class="row">
    <?php if ($result->num_rows > 0) {?>
      <?php while ($article = $result->fetch_assoc()) {?>
        <div class="col-md-4 mb-3">
          <div class="card h-100">
            <img src="imagens/<?php echo $article['image'];?>" class="card-img-top" alt="Imagem de capa do artigo">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($article['title'])?></h5>
              <p class="card-text"><?= htmlspecialchars(substr($article['content'], 0, 200))?>...</p>
              <p class="card-text">
                <small>
                  Criado por <?= htmlspecialchars($article['author_username'])?> em <?= htmlspecialchars($article['created_at'])?>
                </small>
              </p>
              <a href="article.php?id=<?= $article['id']?>" class="btn btn-sm btn-primary float-right">Ver mais</a>
            </div>
          </div>
        </div>
      <?php }?>
    <?php } else {?>
      <!-- Exibir mensagem se não houver artigos -->
      <div class="col-md-12 text-center">
        <h2>Nenhum artigo encontrado!</h2>
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {?>
          <p><a href="create_article.php" class="btn btn-primary">Crie um artigo <?= htmlspecialchars($_SESSION['username'])?>! </a></p>
        <?php } else {?>
          <p>Que tal criar um artigo? <a href="register.php"><i class="fas fa-user"></i> Crie sua conta agora!</a></p>
        <?php }?>
      </div>
    <?php }?>
  </div>
</div>
<?php
require_once 'footer.php';
?>
