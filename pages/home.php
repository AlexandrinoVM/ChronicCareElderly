<!DOCTYPE html>
<html lang="pt">
<head>
  <?php
    include_once("../components/head.php");
    echo head("CHRONIC CARE ELDERLY");
  ?>
</head>
<body>
  
  <main>
    <section>
      <div class="container">
        <h2><?= $mensagem["titulo_principal"] ?></h2>
        <p> <?= $mensagem['apresentacao'] ?> </p>
        <a href="#" class="btn">Ver Matéria</a>
      </div>
    </section>
  </main>
</body>
</html>