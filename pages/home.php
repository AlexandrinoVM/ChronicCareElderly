<?php
  include_once("../admin/idiomas.php");
  include_once("../admin/articles.php");
  
  include_once("../components/head.php");
  include_once("../components/header.php");
  include_once("../components/article.php");
  include_once("../components/footer.php");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <?php
    echo head("CHRONIC CARE ELDERLY");
  ?>
  <link rel="stylesheet" href="../css/home.css">
</head>
<body>

  <?php
    echo headers();
  ?>
  
  <main>
    <section class="hero">
      <div class="container">
        <h2><?= $mensagem["titulo_principal"] ?></h2>
        <p> <?= $mensagem["apresentacao"] ?> </p>
      </div>
      <a href="#content" class="page_A">V</a>
    </section>
  </main>

  <section id="content" class="articles">
    <?php
      echo article(0,$lang);
      echo "<br><br>";
      echo article(1,$lang);
      echo "<br><br>";
      //foreach ($artigo as $artigoc) {
      
        //  echo "<h1>" . $artigoc['lang'][$lang]['titulo'] . "</h1>";
          //echo "<p>" . $artigoc['lang'][$lang]['artigo'] . "</p>";
      //}

    ?>
  </section>

  <?php
    echo footer();
  ?>
</body>
</html>