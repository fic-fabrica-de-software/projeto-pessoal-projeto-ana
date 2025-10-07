<?php

$mysqli = new mysqli("localhost", "root", "root", "db_prestaris");
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
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["email"] ?? "";
    
    $stmt = $mysqli->prepare("SELECT email FROM prestadores WHERE email=?");
    $stmt = $mysqli->prepare("SELECT email FROM clientes WHERE email=?");
    $stmt->bind_param("ss", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $dados = $result->fetch_assoc();
    $stmt->close();

    if ($dados) {
        $_SESSION["email"] = $dados["email"];
        header("Location: paginaMenuPrincipal.php");
        exit;
    } else {
        $msg = "Email inexistente";
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

        <?php if (empty($_SESSION["email"])): ?>

        <div class="infologin">
            <p> Entre com seu e-mail para acessar o app</p>
        </div>
       
        <div class="login">

                <form method="POST">
    
                    <div class="campologin">
                        <label for="email"></label><br>
                        <input type="email" name="email" id="email" placeholder="email@gmail.com" required>
                        <div class="error" id="erroNome"></div>
                    </div>
    
                    <button class="botaoinverso" type="submit">Continue</button>
                </form>
        </div>

        <div class="divider">
            <span>or</span>
        </div>

        <a href="criarContaPrestador.php"><button class="botao3"> Continue como Prestador de Serviço</button></a>
        <a href="criarContaCliente.php"><button class="botao2"> Continue como Cliente</button></a>

        <a class="termos" href="termosDeUso.php"><p>By clicking continue, you agree to our <strong> Terms of Service</strong> and <strong> Privacy Policy </strong></p></a>

        <?php else: ?>
             <?php if ($msg): ?><p class="msg"><?= $msg ?></p><?php endif; ?>
        <?php endif; ?>
        
</body>
</html>