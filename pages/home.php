<?php
  include_once("../admin/idiomas.php");
  
  include_once("../components/head.php");
  include_once("../components/header.php");
  include_once("../components/articles.php");
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
      echo article(1);
      echo "<br><br>";
      echo article(2);
      echo "<br><br>";
      echo article(3);
      echo "<br><br>";
      echo article(4);
      echo "<br><br>";
      echo article(5);
      echo "<br><br>";
      echo article(6);
      echo "<br><br>";
      echo article(7);
      echo "<br><br>";
    ?>
  </section>

  <?php
    echo footer();
  ?>
</body>
</html>