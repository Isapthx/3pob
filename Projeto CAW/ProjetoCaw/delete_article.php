<!-- delete_article.php -->

<?php
require_once 'header.php';
require_once 'db.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
  if (isset($_POST['delete_article'])) {
    // Excluir artigo
    $query = "DELETE FROM articles WHERE id = $id";
    $conn->query($query);
    echo "<p class='text-center'>Artigo excluído com sucesso.</p>";
    header("Location: user.php");
  }
?>

<div class="container">
  <h2 class="text-center">Excluir Artigo</h2>
  <p class="text-center">Tem certeza que deseja excluir o artigo?</p>
  <form action="delete_article.php?id=<?= $id?>" method="post" class="text-center">
    <input type="submit" name="delete_article" value="Excluir Artigo" class="center btn btn-danger">
  </form>
</div>

<?php require_once 'footer.php'; ?>