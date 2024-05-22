

<!DOCTYPE html>
<html lang="pt">
<head>
  <?php
    include_once("../admin/idiomas.php");
    include_once("../components/head.php");
    echo head("CHRONIC CARE ELDERLY");
  ?>
  <link rel="stylesheet" href="../css/home.css">
</head>
<body>

  <?php
    include_once("../components/header.php");
    echo headers();
  ?>
  
  <main>
    <section class="hero">
      <div class="container">
        <h2><?= $mensagem["titulo_principal"] ?></h2>
        <p> <?= $mensagem["apresentacao"] ?> </p>
      </div>
    </section>
  </main>

  <section class="articles">
    <article>
      <h3>Nome do Artigo</h3>
      <h4>2024-05-21 By Barbosa</h4>
      <p>What is Lorem? <br>
      "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
      Quos eos alias dolores nulla a eum molestias laboriosam maiores 
      animi nostrum iure magni iste recusandae, ipsam rerum suscipit ut itaque praesentium."</p>
    </article>
  </section>

  <?php
    include_once("../components/footer.php");
    echo footer();
  ?>
</body>
</html>