<?php
include 'db.php';

$erro = "";
$sucesso = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name   = $_POST['name'] ?? "";
    $email  = $_POST['email'] ?? "";
    $datana  = $_POST['datana'] ?? "";
    $cpf    = $_POST['cpf'] ?? "";
    $telefone  = $_POST['telefone'] ?? "";
    $pass   = $_POST['senha'] ?? "";

    
    if (strlen($cpf) !== 11) {
        $erro = "O CPF deve ter exatamente 11 dígitos.";
    }
    elseif (strlen($telefone) < 10) {
        $erro = "O telefone deve ter pelo menos 10 dígitos.";
    }
    else {
       
        $sql = "INSERT INTO usuários
                (name, email, datana, cpf, telefone, senha)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isssssssi", $name, $email, $datana, $cpf, $telefone, $pass);

        if ($stmt->execute()) {
            $sucesso = "Novo registro criado com sucesso!";
        } else {
            $erro = "Erro ao cadastrar: " . $conn->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Prestador</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<header>
    <img class="imagemlogologin" src="../assets/logo.png" alt="">
</header>
<body>

    <main>

                <?php if (!empty($erro)) { ?>
                    <div class="erro"><?= $erro ?></div>
                <?php } ?>

                <?php if (!empty($sucesso)) { ?>
                    <div class="sucesso"><?= $sucesso ?></div>
                <?php } ?>

                <p> Crie sua conta como Prestador de Serviço</p>

                <form method="POST" action="">

                    <div class="infocadastro">
                        <input type="text" name="name" placeholder="Nome:" required>
                    </div>

                    <div class="infocadastro">
                        <input type="email" name="email" placeholder="email@gmail.cm: " required>
                    </div>

                    <div class="infocadastro">
                        <input type="datetime" name="data_nascimento" placeholder="Data de Nascimento " required>
                    </div>

                    <div class="infocadastro">
                        <input type="text" name="cpf" placeholder="CPF:" required minlength="11" maxlength="11">
                    </div>

                    <div class="infocadastro">
                        <input type="text" name="telefone" placeholder="Telefone:" required minlength="10">
                    </div>

                    <div class="infocadastro">
                        <input type="text" name="servico" placeholder="Serviço a prestar:" required>
                    </div>

                    <div class="infocadastro">
                        <input type="text" name="localizacao" placeholder="Localização:" required minlength="10">
                    </div>

                    <div class="infocadastro">
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>

                    <hr>

                    <input class="botaoinverso" type="submit" value="Continue">
                </form>
    </main>
</body>
</html>