<?php
    include_once("../components/head.php");
    include_once("../components/header.php");
    include_once("../components/article.php");
    include_once("../components/footer.php");
  ?>

<?php
session_start();
include_once('../bd/config.php');


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_SESSION['username'];
    
    $stmt = $conn->prepare("INSERT INTO posts (title, content, date, author) VALUES (?, ?, CURDATE(), ?)");
    $stmt->bind_param("sss", $title, $content, $author);

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
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <h1>Sênior com Saúde</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="">titulo do artigo</label>
        <br>
        <input type="text" name="title" placeholder="article title" required>
        <br>
        <label for="">conteudo do artigo</label>
        <br>
        <textarea name="content" id="" required></textarea>
        <br>
        <button type="submit">comfirm</button>
    </form>
</body>
</html>
