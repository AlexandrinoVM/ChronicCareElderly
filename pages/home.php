<!DOCTYPE html>
<html lang="pt">
<head>
  <?php
    include_once("../admin/idiomas.php");
    include_once("../components/head.php");
    echo head("CHRONIC CARE ELDERLY");
  ?>
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
        <a href="#" class="btn"><?= $mensagem["ver_materia"] ?> </a>
      </div>
    </section>
  </main>

  <?php
    include_once("../components/footer.php");
    echo footer();
  ?>
</body>
</html>