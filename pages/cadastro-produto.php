<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EcoEscambo | Cadastro de Produto</title>
  <link rel="stylesheet" href="../css/style2.css">
  <link rel="stylesheet" href="../css/cadastro-produto.css" />
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
    <form class="formulario">
      <label for="titulo">Titulo do produto</label>
      <input type="text" id="titulo" name="titulo" required />

      <label for="descricao">Descrição do produto</label>
      <textarea id="descricao" name="descricao" rows="6" required></textarea>

      <label for="foto">Foto do produto</label>
      <input type="file" id="foto" name="foto" accept="image/*" required />

      <button type="submit">Cadastrar produto</button>
    </form>
  </main>
</body>
</html>
