<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Seu Projeto</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .logo {
    max-width: 100px;
  }

  .navbar {
    padding-top: 2px;
    padding-bottom: 2px;
    height: 60px;

  }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="images/logo1.png" alt="" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quem_somos.php">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="exibicao_produtos.php">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="carrinho_compras.php">Carrinho</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="cadastro_produtos.php">Cadastro de Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php">Entre ou Cadastre-se</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</body>

</html>