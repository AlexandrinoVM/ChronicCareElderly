<?php
  include_once("../admin/idiomas.php");
  
  include_once("../components/head.php");
  include_once("../components/header.php");
  include_once("../components/article.php");
  include_once("../components/footer.php");
  include_once("../admin/articles.php");
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
  <?php 
    $id = $_GET['id'];
  ?>

  <h1><?= $artigo_content[$id]['titulo']?></h1>
  <p><?= $artigo_content[$id]['conteudo']?></p>
  
</body>
</html>