<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EcoEscambo | Ofertas Recebidas</title>
  <link rel="stylesheet" href="../css/style2.css">
  <link rel="stylesheet" href="../css/ofertas-recebidas.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="logo">
      <a href="catalogo.php">
        <img src="../img/logo2.png" alt="Logo EcoEscambo" />
      </a>
    </div>
    <nav>
      <a href="catalogo.php">Catálogo</a>
      <a href="meus-produtos.php">Meus produtos</a>
      <a href="analise-de-oferta.php">Ofertas</a>
      <a href="login.php">Sair</a>
    </nav>
  </header>

  <main>
    <section class="oferta">
      <h2>Meu produto</h2>
      <div class="card horizontal">
        <div class="img-placeholder"></div>
        <div class="conteudo">
          <h3>Produto 00</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in dolor vel nunc iaculis consequat. Etiam in ligula non nisl iaculis lacinia ac at nulla.</p>
        </div>
      </div>

      <h2>Aceito troca por</h2>

      <div class="card horizontal invertido">
        <div class="conteudo">
          <h3>Produto 01</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in dolor vel nunc iaculis consequat. Etiam in ligula non nisl iaculis lacinia ac at nulla.</p>
          <button class="propor" onclick="window.location.href='analise-de-oferta.php'">Propor</button>
        </div>
        <div class="img-placeholder"></div>
      </div>

      <div class="card horizontal invertido">
        <div class="conteudo">
          <h3>Produto 02</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in dolor vel nunc iaculis consequat. Etiam in ligula non nisl iaculis lacinia ac at nulla.</p>
          <button class="propor" onclick="window.location.href='analise-de-oferta.php'">Propor</button>
        </div>
        <div class="img-placeholder"></div>
      </div>
    </section>

    <aside class="filtros">
      <h3>Filtros</h3>
      <select>
        <option>Beltrano</option>
        <option>Fulano</option>
        <option>Ciclano</option>
      </select>
      <p>3 interessados</p>

      <div class="paginacao">
        &laquo; <span>1</span><span>2</span><span>3</span><span>4</span><span>5</span><span>6</span><span>7</span><span>8</span><span>9</span> &raquo;
      </div>
    </aside>
  </main>
</body>

</html>