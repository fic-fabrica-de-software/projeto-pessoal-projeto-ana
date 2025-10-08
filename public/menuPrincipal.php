<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Principal</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

  <div class="opcoes">
      <div class="opcao">
        <img class="img_opcao" src="../assets/coracao.png" alt="">
        <p>Atividade</p>
      </div>
      <div class="opcao">
        <img class="img_opcao" src="../assets/relogio.png" alt="">
        <p>Histórico</p>
      </div>
      <div class="opcao">
        <img class="img_opcao" src="../assets/seguindo.png" alt="">
        <p>Seguindo</p>
      </div>
  </div>

  <img class="cupom_principal" src="../assets/cupom_vermelho.png" alt="">

  <section>
    <h2>Conheça novos serviços</h2>
    <div class="servicos">
      <div class="servico">
        <img src="../assets/pintura/1.jpg" alt="">
        <p>Pintura</p>
      </div>
      <div class="servico">
        <img src="../assets/limpeza/1.png" alt="">
        <p>Limpeza</p>
      </div>
      <div class="servico">
        <img src="../assets/jardinagem/1.jpg" alt="">
        <p>Jardinagem</p>
      </div>
      <div class="servico">
        <img src="../assets/dog_walker/1.jpg" alt="">
        <p>Dog-Walker</p>
      </div>
    </div>
  </section>

  <section>
    <h2>Visitados Recentemente</h2>
    <div class="cards">
      <div class="card">
        <img src="../assets/limpeza/4.jpg" alt="">
        <div class="info">
          <p>Limpeza interna</p>
          <span>R$105,99/h</span>
        </div>
      </div>
      <div class="card">
        <img src="../assets/pintura/4.jpg" alt="">
        <div class="info">
          <p>Pintura residencial</p>
          <span>R$79,99/h</span>
        </div>
      </div>
      <div class="card">
        <img src="../assets/encanador/4.png" alt="">
        <div class="info">
          <p>Encanador</p>
          <span>R$56,99/h</span>
        </div>
      </div>
    </div>
  </section>

  <?php include('../includes/footer.php'); ?>

</body>
</html>