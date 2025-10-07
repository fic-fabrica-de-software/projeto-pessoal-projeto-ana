<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Principal</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

  <div class="search-bar">
    <input type="text" placeholder="Pesquisar">
  </div>

  <img src="" alt="">

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
        <img src="https://cdn-icons-png.flaticon.com/512/1584/1584909.png" alt="">
        <div class="info">
          <p>Limpeza interna</p>
          <span>R$105,99/h</span>
        </div>
      </div>
      <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/512/2910/2910757.png" alt="">
        <div class="info">
          <p>Eletricista residencial</p>
          <span>R$79,99/h</span>
        </div>
      </div>
      <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/512/2634/2634575.png" alt="">
        <div class="info">
          <p>Encanador</p>
          <span>R$56,99/h</span>
        </div>
      </div>
    </div>
  </section>

  <div class="bottom-nav">
    <i class="fas fa-home"></i>
    <i class="fas fa-history"></i>
    <i class="fas fa-shopping-cart"></i>
    <i class="fas fa-user"></i>
  </div>

  <?php include('../includes/footer.php'); ?>

</body>
</html>