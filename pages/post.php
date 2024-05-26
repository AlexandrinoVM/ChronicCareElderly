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
      foreach ($artigo_content as $artigo) {
        if ($artigo['id'] == $id) {
          echo "<h1>".$artigo['lang'][$lang]['titulo']."</h1>";
          echo "<p>".$artigo['lang'][$lang]['conteudo']."</p>";
        }
      }
    ?>
  </div>

  <?php
    echo footer();
  ?>
</body>
</html>