<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EcoEscambo | Catálogo</title>
  <link rel="stylesheet" href="../css/style2.css">
  <link rel="stylesheet" href="../css/catalogo.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    <div class="logo">
      <a href="catalogo.php">
        <img src="../img/logo2.png" alt="Logo EcoEscambo" />
      </a>
    </div>
    <nav>
      <a href="catalogo.php" class="ativo">Catálogo</a>
      <a href="meus-produtos.php">Meus produtos</a>
      <a href="analise-de-oferta.php">Ofertas</a>
      <a href="login.php">Sair</a>
    </nav>
  </header>

  <main>
    <section class="produtos">
      <div class="card">
        <div class="img-placeholder"></div>
        <div class="conteudo">
          <h2>Bicicleta Rosa</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in dolor vel nunc iaculis consequat...</p>
          <button class="interesse">Tenho interesse</button>
        </div>
      </div>

      <div class="card">
        <div class="img-placeholder"></div>
        <div class="conteudo">
          <h2>Produto 02</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in dolor vel nunc iaculis consequat...</p>
          <button class="remover">Remover interesse</button>
        </div>
      </div>

      <div class="card">
        <div class="img-placeholder"></div>
        <div class="conteudo">
          <h2>Produto 03</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in dolor vel nunc iaculis consequat...</p>
          <button class="interesse">Tenho interesse</button>
        </div>
      </div>
    </section>

    <aside class="filtros">
      <h3>Filtros</h3>
      <label><input type="radio" name="filtro" checked /> Todos produtos</label><br />
      <label><input type="radio" name="filtro" /> Apenas os que estou interessado</label>

      <div class="paginacao">
        &laquo; <span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span> &raquo;
      </div>
    </aside>
  </main>
  <script src="../js/catalogo.js"></script>
</body>

</html>