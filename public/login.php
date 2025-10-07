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
    
                    <button class="botaoinverso" type="submit">Continue</button>
                </form>
        </div>

        <div class="divider">
            <span>or</span>
        </div>

        <button class="botao3"> Continue como Prestador de Serviço</button>
        <button class="botao2"> Continue como Cliente</button>

        <a class="termos" href="termosDeUso.php"><p>By clicking continue, you agree to our <strong> Terms of Service</strong> and <strong> Privacy Policy </strong></p></a>

</body>
</html>