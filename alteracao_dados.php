<!-- Ezequiel Alves Morais, Gabriel Souza, Daniela -->
<?php include(__DIR__ .'/includes/header.php'); ?>
<main>
  <h2>Produtos</h2>
  <div class="produtos">
    <?php
   
        $produtos = [
          ['id' => 1, 'nome' => 'AeroRunner', 'descricao' => 'Domine cada corrida com os tênis AeroRunner. Leves e aerodinâmicos, esses tênis oferecem uma combinação perfeita de estabilidade e flexibilidade.', 'preco' => 29.99, 'imagem' => 'images/1.jpg'],
          ['id' => 2, 'nome' => 'FlexStep', 'descricao' => 'Dê passos confiantes com os tênis FlexStep. Projetados para proporcionar flexibilidade e estabilidade', 'preco' => 39.99, 'imagem' => 'images/2.png'],
          ['id' => 3, 'nome' => 'Air Force', 'descricao' => 'Os tênis Air Force são feitos para se adaptar ao seu movimento. Com um ajuste flexível e confortável', 'preco' => 49.99, 'imagem' => 'images/3.png'],
          ['id' => 4, 'nome' => 'AeroRunner', 'descricao' => 'Domine cada corrida com os tênis AeroRunner. Leves e aerodinâmicos, esses tênis oferecem uma combinação perfeita de estabilidade e flexibilidade.', 'preco' => 29.99, 'imagem' => 'images/sapato5.jpg'],
          ['id' => 5, 'nome' => 'AeroZoom', 'descricao' => 'Dê passos confiantes com os tênis FlexStep. Projetados para proporcionar flexibilidade e estabilidade', 'preco' => 39.99, 'imagem' => 'images/sapato4.jpg'],
          ['id' => 6, 'nome' => 'MaxMotion', 'descricao' => 'Os tênis Air Force são feitos para se adaptar ao seu movimento. Com um ajuste flexível e confortável', 'preco' => 49.99, 'imagem' => 'images/sandalia.jpg'],
          ['id' => 7, 'nome' => 'AeroRunner', 'descricao' => 'Domine cada corrida com os tênis AeroRunner. Leves e aerodinâmicos, esses tênis oferecem uma combinação perfeita de estabilidade e flexibilidade.', 'preco' => 29.99, 'imagem' => 'images/sapato5.jpg'],
          ['id' => 8, 'nome' => 'UltraSprint', 'descricao' => 'Dê passos confiantes com os tênis UltraSprint. Projetados para proporcionar flexibilidade e estabilidade', 'preco' => 39.99, 'imagem' => 'images/sapato4.jpg'],
          ['id' => 9, 'nome' => 'SpeedStride', 'descricao' => 'Os tênis SpeedStride são feitos para se adaptar ao seu movimento. Com um ajuste flexível e confortável', 'preco' => 49.99, 'imagem' => 'images/sapato1.jpg'],
          ['id' => 10, 'nome' => 'FlexiFit', 'descricao' => 'Os tênis FlexiFit são feitos para se adaptar ao seu movimento. Com um ajuste flexível e confortável', 'preco' => 49.99, 'imagem' => 'images/sapato3.jpg'],
          ['id' => 11, 'nome' => 'TurboGrip', 'descricao' => 'Os tênis TurboGrip são feitos para se adaptar ao seu movimento. Com um ajuste flexível e confortável', 'preco' => 49.99, 'imagem' => 'images/sapato6.jpg'],
          ['id' => 12, 'nome' => 'Velocity Boost', 'descricao' => 'Os tênis Velocity Boost são feitos para se adaptar ao seu movimento. Com um ajuste flexível e confortável', 'preco' => 49.99, 'imagem' => 'images/sapato8.jpg'],
          ['id' => 13, 'nome' => 'TurboTech', 'descricao' => 'Os tênis TurboTech são feitos para se adaptar ao seu movimento. Com um ajuste flexível e confortável', 'preco' => 49.99, 'imagem' => 'images/sapato7.jpg'],
          ['id' => 14, 'nome' => 'PowerPace', 'descricao' => 'Os tênis PowerPace são feitos para se adaptar ao seu movimento. Com um ajuste flexível e confortável', 'preco' => 49.99, 'imagem' => 'images/sapato9.jpg'], ['id' => 3, 'nome' => 'SwiftStride', 'descricao' => 'Os tênis SwiftStride são feitos para se adaptar ao seu movimento. Com um ajuste flexível e confortável', 'preco' => 49.99, 'imagem' => 'images/sandalia3.jpg']
        ];

        foreach ($produtos as $produto) {
            echo "<div class='produto'>";
            echo "<h3>" . htmlspecialchars($produto["nome"]) . "</h3>";
            echo "<p>" . htmlspecialchars($produto["descricao"]) . "</p>";
            echo "<p>Preço: " . htmlspecialchars($produto["preco"]) . "</p>";
            echo "</div>";
        }
        ?>
  </div>
</main>

<style>
.produtos {
  display: flex;
  flex-wrap: wrap;
}

.produto {
  border: 1px solid #ccc;
  border-radius: 5px;
  margin: 10px;
  padding: 10px;
  width: calc(33.333% - 20px);
  box-sizing: border-box;
}

.produto h3 {
  margin-top: 0;
}

<style>body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f7f7f7;
}

main {
  padding: 20px;
}

h2 {
  text-align: center;
  margin-bottom: 30px;
  color: #333;
}

.grid-produtos {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  justify-items: center;
}

.produto {
  border: 1px solid #ccc;
  padding: 15px;
  text-align: center;
  background-color: #fff;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.produto:hover {
  transform: translateY(-5px);
}

.produto img {
  width: 100%;
  height: auto;
  max-height: 200px;
  border-bottom: 1px solid #ddd;
}

.produto h3 {
  font-size: 18px;
  margin-top: 10px;
  margin-bottom: 5px;
  color: #333;
}

.produto p {
  font-size: 14px;
  color: #666;
}

.produto button {
  margin-top: 15px;
  padding: 10px 20px;
  background-color: #142c54;
  color: white;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.produto button:hover {
  background-color: #0056b3;
}
</style>
</style>


<?php include(__DIR__ .'/includes/footer.php'); ?>