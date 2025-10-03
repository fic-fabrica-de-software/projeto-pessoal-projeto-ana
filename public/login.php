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
    
                    <button class="botaoinverso" type="submit">Entrar</button>
                </form>
        </div>

        <div class="or">
            <br>
            <hr>
            <p>or</p>
            <hr>
            <br>
        </div>

        <button class="botao"> Continue como Prestador de Serviço</button>
        <br>
        <br>
        <button class="botao"> Continue como Cliente</button>

        <p href="termosDeUso.php" class="terms">By clicking continue, you agree to our <strong> Terms of Service</strong> and <strong> Privacy Policy </strong></p>

</body>
</html>