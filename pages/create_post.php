<?php
  include_once('../bd/config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $title = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content);

    
    if ($stmt->execute()) {
        echo "Novo post criado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="">titulo do artigo</label>
        <br>
        <input type="text"  name="title" placeholder="article title">
        <br>
        <label for="">conteudo do artigo</label>
        <br>
        <textarea  name="content" id=""></textarea>
        <br>

        <button type="submit">comfirm</button>
    </form>
</body>
</html>


