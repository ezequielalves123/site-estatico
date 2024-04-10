<!-- Ezequiel Alves Morais, Gabriel Souza, Daniela -->
<?php
 include(__DIR__ . '/includes/header.php'); ?>
<?php

session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if (isset($_POST['aumentar'])) {
    $indice = $_POST['aumentar'];
    if (isset($_SESSION['carrinho'][$indice])) {
        $_SESSION['carrinho'][$indice]['quantidade']++;
    }
    echo json_encode(['success' => true]);
    exit;
}

if (isset($_POST['diminuir'])) {
    $indice = $_POST['diminuir'];
    if (isset($_SESSION['carrinho'][$indice]) && $_SESSION['carrinho'][$indice]['quantidade'] > 1) {
        $_SESSION['carrinho'][$indice]['quantidade']--;
    }
    echo json_encode(['success' => true]);
    exit;
}

$total = 0; 
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
<style>

</style>

<main class="container mt-5">
  <h2 class="mb-4">Carrinho de Compras</h2>
  <div class="table-responsive">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">Produto</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Preço Unitário</th>
          <th scope="col">Subtotal</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($_SESSION['carrinho'] as $indice => $item): ?>
        <tr>
          <td><?= htmlspecialchars($item['nome']) ?></td>
          <td><?= htmlspecialchars($item['quantidade']) ?></td>
          <td>R$ <?= number_format($item['preco'], 2, ',', '.') ?></td>
          <td>R$ <?= number_format($item['quantidade'] * $item['preco'], 2, ',', '.') ?></td>
          <td>
            <a href="remover_carrinho.php?id=<?= $item['id'] ?>" class="btn btn-danger btn-sm">Remover</a>
            <a href="alteracao_dados.php?id=<?= $item['id'] ?>" class="btn btn-primary btn-sm">Alterar Produto</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3" class="text-end"><strong>Total:</strong></td>
          <td colspan="2">R$ <?= number_format($total, 2, ',', '.'); ?></td>
        </tr>
      </tfoot>
    </table>
  </div>
  <div class="d-flex justify-content-end">
    <a href="login.php" class="btn btn-primary">Finalizar Compra</a>
  </div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $('.quantidade-modificar').click(function(e) {
    e.preventDefault();
    var indice = $(this).data('indice');
    var acao = $(this).data('acao');

    var dados = {};
    dados[acao] = indice;

    $.post('', dados, function(retorno) {
      location.reload();
    }, 'json');
  });
});
</script>


<?php include(__DIR__ . '/includes/footer.php'); ?>