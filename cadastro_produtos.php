<!-- Ezequiel Alves Morais, Gabriel Souza, Daniela -->
<?php include(__DIR__ .'../includes/header.php'); ?>

<style>
body {
  background-color: #f7f7f7;
}

main {
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin: 20px auto;
  max-width: 600px;
}

h2 {
  color: #142c54;
  text-align: center;
}

.campo {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #142c54;
}

input[type="text"],
input[type="number"],
textarea,
select {
  width: calc(100% - 18px);
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  outline: none;
}

input[type="text"]:focus,
input[type="number"]:focus,
textarea:focus,
select:focus {
  border-color: #142c54;
}

button {
  background-color: #142c54;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0e2245;
}
</style>

<main>
  <h2>Cadastro de Produtos</h2>
  <form action="processa_cadastro_produto.php" method="post" enctype="multipart/form-data">
    <div class="campo">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>
    </div>

    <div class="campo">
      <label for="descricao">Descrição:</label>
      <textarea id="descricao" name="descricao" required></textarea>
    </div>

    <div class="campo">
      <label for="preco">Preço:</label>
      <input type="number" id="preco" name="preco" step="0.01" required>
    </div>

    <div class="campo">
      <label for="categoria">Categoria:</label>
      <select id="categoria" name="categoria">
        <option value="Calcados">Tênis</option>
        <option value="Calcados">Sapato</option>
        <option value="Calcados">Sandalia</option>
      </select>
    </div>

    <div class="campo">
      <label for="imagem">Imagem do Produto:</label>
      <input type="file" id="imagem" name="imagem">
    </div>

    <button type="submit">Cadastrar Produto</button>
  </form>
</main>


<?php include(__DIR__ .'../includes/footer.php'); ?>