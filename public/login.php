<?php

$mysqli = new mysqli("localhost", "root", "root", "fast_sesi_sa");
if ($mysqli->connect_errno) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: paginaLogin.php");
    echo " Sua sessão foi encerrada!";
    exit;
}

$msg = "";
if (isset($_GET['msg']) && $_GET['msg'] == 'expired') {
    $msg = "Sua sessão foi expirada!";
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome_funcionario"] ?? "";
    $cred = $_POST["credencial_funcionario"] ?? "";
    $pass = $_POST["password"] ?? ""; 

    
    $stmt = $mysqli->prepare("SELECT nome_funcionario, credencial_funcionario, senha_funcionario FROM funcionario WHERE nome_funcionario=? AND credencial_funcionario=?");
    $stmt->bind_param("ss", $nome, $cred);
    $stmt->execute();
    $result = $stmt->get_result();
    $dados = $result->fetch_assoc();
    $stmt->close();

    //password_verify
    if (password_verify($pass, $dados["senha_funcionario"])) {
    echo 'Senha válida!';
    } else {
    echo 'Senha inválida';
    }

    if ($dados) {
        $_SESSION["nome_funcionario"] = $dados["nome_funcionario"];
        $_SESSION["credencial_funcionario"] = $dados["credencial_funcionario"];
        header("Location: paginaMenuPrincipal.php");
        exit;
    } else {
        $msg = "Usuário ou senha incorretos!";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/style.css">

</head>
<header>
        <img class="imagemlogologin" src="../assets/logo.png" alt="">
</header>

<body>
    <?php if (empty($_SESSION["credencial_funcionario"])): ?>

        <div class="infologin">
            <h3> Criar Conta</h3>
            <p> Entre com seu e-mail para acessar o app</p>
        </div>
       
        <div class="login">
            
                <form method="POST">
    
                    <div class="campologin">
                        <label for="email"></label><br>
                        <input type="email" name="email" id="email" placeholder="email@gmail.com" required>
                        <div class="error" id="erroNome"></div>
                    </div>
    
                    <button type="submit">Entrar</button>
                </form>
        </div>

    <?php else: ?>
        <?php if ($msg): ?><p class="msg"><?= $msg ?></p><?php endif; ?>
    <?php endif; ?>

</body>
</html>