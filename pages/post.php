<?php
  include_once("../admin/idiomas.php");
  
  include_once("../components/head.php");
  include_once("../components/header.php");
  include_once("../components/article.php");
  include_once("../components/footer.php");
  include_once("../admin/articles.php");
?>
  <?php
    $id = $_GET['id'];
  ?>
<!DOCTYPE html >
<html lang="pt">
<head>

  <?php
    echo head("Como cuidar da saúde física dos idosos");
  ?>
  <link rel="stylesheet" href="../css/post.css">
</head>
<body>
<!-- <h1><?= $artigo_content[$id]['titulo']?></h1>
  <p><?= $artigo_content[$id]['conteudo']?></p> -->
  <?php
  foreach ($artigo_content as $artigo) {
    if ($artigo['id'] == $id) {
      // Acessando título e conteúdo em português
      echo "<h1>" . $artigo['lang'][$lang]['titulo'] . "</h1>";
      echo "<p>" . $artigo['lang'][$lang]['conteudo'] . "</p>";
      
    }
  }
  ?>
</body>
</html>