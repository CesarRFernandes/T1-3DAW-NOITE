<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EcoEscambo | Análise de Oferta</title>
  <link rel="stylesheet" href="../css/style2.css">
  <link rel="stylesheet" href="../css/analise-de-oferta.css" />
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
      <a href="analise-de-oferta.php" class="ativo">Ofertas</a>
      <a href="login.php">Sair</a>
    </nav>
  </header>

  <main>
    <section class="troca">
      <h2>Meu produto</h2>
      <div class="card horizontal">
        <div class="img-placeholder"></div>
        <div class="conteudo">
          <h3>Produto 00</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in dolor vel nunc iaculis consequat. Etiam in ligula non nisl iaculis lacinia ac at nulla.</p>
        </div>
      </div>

      <h2>Oferece troca por</h2>
      <div class="card horizontal invertido">
        <div class="conteudo">
          <h3>Produto 01</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in dolor vel nunc iaculis consequat. Etiam in ligula non nisl iaculis lacinia ac at nulla.</p>
          <div class="botoes">
            <button class="recusar">Recusar</button>
            <button class="aceitar">Aceitar</button>
          </div>
        </div>
        <div class="img-placeholder"></div>
      </div>
    </section>

    <aside class="interessado">
      <h3>Interessado</h3>
      <div class="nome">Beltrano</div>
    </aside>
  </main>
  <script src="../js/analise-de-oferta.js"></script>
</body>

</html>