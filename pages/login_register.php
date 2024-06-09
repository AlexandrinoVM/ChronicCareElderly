<?php
session_start();
include_once('../bd/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $action = $_POST['action'];

    if ($action == 'register') {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ss", $user, $hashedPassword);
            if ($stmt->execute()) {
                echo "Registro bem-sucedido!";
            } else {
                echo "Erro: " . $stmt->error;
            }
            $stmt->close();
        }
    } elseif ($action == 'login') {
        $sql = "SELECT password FROM users WHERE username = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $user);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($hashedPassword);
                $stmt->fetch();

                if (password_verify($password, $hashedPassword)) {
                    
                    echo "Login bem-sucedido!";

                    
                    $updateSql = "UPDATE posts SET log = TRUE WHERE author = ?";
                    if ($updateStmt = $conn->prepare($updateSql)) {
                        $updateStmt->bind_param("s", $user);
                        if ($updateStmt->execute()) {
                            echo "Log atualizado com sucesso!";
                        } else {
                            echo "Erro ao atualizar log: " . $updateStmt->error;
                        }
                        $updateStmt->close();
                    }

                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $user;

                    
                    header("Location: create_post.php");
                    exit();
                } else {
                    echo "Senha incorreta!";
                }
            } else {
                echo "Usuário não encontrado!";
            }
            $stmt->close();
        }
    }
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_register</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/login_register.css">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="">criar/entrar</label>
    <br>
    <br>
    <label for="">usuário</label>
    <br>
    <input type="text" id="user" name="user" required>
    <br>
    <br>
    <label for="">senha</label>
    <br>
    <input type="password" id="password" name="password" required>
    <br>
    <br>
    <button type="submit" name="action" value="register">registrar</button>
    <button type="submit" name="action" value="login">login</button>
</form>

</body>
</html>