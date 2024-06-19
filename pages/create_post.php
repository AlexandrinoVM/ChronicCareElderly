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
   
    header("Location: login_register.php");
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
    <?php
        include_once("../components/header.php");
        echo headers();
    ?>

    <style>

        .formulario {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        /* Estilização do contêiner do formulário */
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            box-sizing: border-box;
        }

        /* Estilização dos rótulos */
        label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
            font-size: 16px;
            font-weight: bold;
        }

        /* Estilização dos inputs */
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        /* Estilização do textarea */
        textarea {
            height: 150px;
            resize: vertical;
        }

        /* Estilização dos botões */
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

    <div class="formulario">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="">Title</label>
            <br>
            <input type="text" name="title" placeholder="article title" required>
            <br>
            <label for="">Content</label>
            <br>
            <textarea name="content" id="" required></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
