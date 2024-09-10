<?php
require_once 'header.php';
require_once 'db.php';
if (!file_exists('imagens')) {
    mkdir('imagens', 0777, true);
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    $username = $_SESSION['username'];
    $query = "SELECT id FROM users WHERE username = '$username'";
    $result = $conn->query($query);
    $user_data = $result->fetch_assoc();
    $user_id = $user_data['id'];
} else {
    ?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
        <div class="text-center">
        <i class="fas fa-newspaper fa-4x mb-3" style="color: #aaa;"></i>
        <h2 class="mb-3">Você não pode criar um artigo agora!</h2>
        <p>Para criar você precisa estar logado. <a href="register.php"><i class="fas fa-user"></i> Crie sua conta agora!</a></p>
        </div>
    </div>
    <?php
    exit;
}

if (isset($_POST['create_article'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author_id = $user_id;
    $author_username = $_SESSION['username'];
  
    // Verificar se a imagem foi enviada
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
  
        // Armazenar o caminho da imagem no banco de dados
        $query = "INSERT INTO articles (title, content, author_id, author_username, image) VALUES ('$title', '$content', '$author_id', '$author_username', '$image_name')";
      } else {
        $error = 'Erro: Imagem inválida!';
      }
    } else {
      $query = "INSERT INTO articles (title, content, author_id, author_username) VALUES ('$title', '$content', '$author_id', '$author_username')";
    }
  
    if ($conn->query($query) === TRUE) {
      echo "Artigo criado com sucesso.";
      header("Location: user.php");
      exit;
    } else {
      echo "Erro ao criar artigo: " . $conn->error;
    }
  }
?>

<div class="container">
  <h2 class="text-center">Criar Artigo</h2>
  <form action="create_article.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="image">Imagem de capa (350x150)</label>
        <input type="file" name="image" id="image" accept="image/*" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Título: </label>
        <input type="text" id="title" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="content">Conteúdo:</label>
        <textarea id="content" name="content" class="form-control" required></textarea>
    </div>
    <input type="submit" name="create_article" value="Criar Artigo" class="btn btn-primary">
  </form>
</div>
<?php
require_once 'footer.php';
?>
