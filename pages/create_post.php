<?php
  include_once("../admin/idiomas.php");
  include_once("../admin/articles.php");
 
  include_once("../components/head.php");
  include_once("../components/header.php");
  include_once("../components/article.php");
  include_once("../components/footer.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>
</head>
<body>
    <form action="post">
        <label for="">titulo do artigo</label>
        <br>
        <input type="text" placeholder="article title">
        <br>
        <label for="">conteudo do artigo</label>
        <br>
        <textarea name="" id=""></textarea>
        <br>
        <button type="submit">comfirm</button>
    </form>
</body>
</html>