<?php
  include_once("../admin/idiomas.php");
  include_once("../admin/articles.php");
  
  include_once("../components/head.php");
  include_once("../components/header.php");
  include_once("../components/article.php");
  include_once("../components/footer.php");

  $id = $_GET['id'];
?>
<!DOCTYPE html >
<html lang="pt">
<head>
  <?php
    echo head("Como cuidar da saúde física dos idosos");
  ?>
  <link rel="stylesheet" href="../css/posts.css">
</head>
<body>
  <header>
    <div class="container">
      <!-- <input class="back_button" type="button" value="<"> -->
      <a class="back_button" href="../pages/home.php"><img src="../assets/BackArrow.svg" alt="<"></a>
      <h1>Sênior com Saúde</h1>
    </div>
  </header>
  <div class="conteudo">
    <?php
    if($id == 0 || $id ==1 ){
      foreach ($artigo_content as $artigo) {
        if ($artigo['id'] == $id) {
          echo "<h1>".$artigo['lang'][$lang]['titulo']."</h1>";
          echo "<p>".$artigo['lang'][$lang]['conteudo']."</p>";
        }
      }
    }else{
      include_once('../bd/config.php');
      $sql = "SELECT title, content FROM posts WHERE id = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("i", $id);
          $stmt->execute();
          $stmt->bind_result($title, $content);
          $stmt->fetch();
          $stmt->close();

          if ($title && $content) {
              echo "<h1>$title</h1>";
              echo "<p>$content</p>";
          } else {
              echo "<p>Post not found.</p>";
          }
    }


    ?>
  </div>

  <?php
    echo footer();
  ?>
</body>
</html>