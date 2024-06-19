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
<div id="main content">
  <style>
    nav {
      gap: 15px; /* Espaço entre os links */
    }
    nav a{
      color: white;
      align-items: center;
      
    }
    nav a:hover{
      opacity: 0.8;
    }
    .link {
  border: 2px solid transparent;
  border-radius: 5px;
  transition: all 0.3s ease;
  cursor: pointer;
  font-size: 14px;
  font-weight: bold;
}

/* Estilo para link de login */
.login-link {
  background-color: #565656;
  color: #fff;
}

/* Estilo para link de post */
.post-link {
  background-color: #2ecc71;
  color: #fff;
}

/* Efeito de hover */
.link:hover {
  border-color: #333;
  background-color: #fff;
  color: #333;
}
.post{
  
  margin: 20px;
  
} 
.post a{
  color: white;
}


  </style>
  <?php
    echo headers();
  ?>
  
  <main>
    <section class="hero">
      <div class="container">
        <h2><?= $mensagem["titulo_principal"] ?></h2>
        <p> <?= $mensagem["apresentacao"] ?> </p>
      </div>
      <a href="#content" class="page_A"><img src="../assets/ArrowDownwards.svg" alt="<?= $mensagem["ver_materia"]?>"></a>
    </section>
  </main>

  <section id="content" class="articles">
    <?php
      echo article(0,$lang);
      echo "<br><br>";
      echo article(1,$lang);
      echo "<br><br>";

      $posts = getArticles();
      echo $posts
      //foreach ($artigo as $artigoc) {
      
        //  echo "<h1>" . $artigoc['lang'][$lang]['titulo'] . "</h1>";
          //echo "<p>" . $artigoc['lang'][$lang]['artigo'] . "</p>";
      //}
      
    


    ?>
  </section>

  <?php
    echo footer();
  ?>
  </div>
  
</body>
</html>