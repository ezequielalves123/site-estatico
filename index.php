<!-- Ezequiel Alves Morais, Gabriel Souza, Daniela -->
<?php include(__DIR__ .'/includes/header.php'); ?>
<style>
html,
body {
  height: 100%;
  margin: 0;
  overflow: hidden;
}

body {
  display: flex;
  flex-direction: column;
  background-size: cover;
  background-position: center;
}

main {
  flex: 1;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

h1 {
  color: white;
  font-size: 80px;
  text-align: center;
  z-index: 2;
  margin: 0;
}

.arrow {
  position: absolute;
  top: 60%;
  transform: translateY(-50%);
  width: 50px;
  height: 50px;
  background-color: rgba(255, 255, 255, 0.5);
  border-radius: 50%;
  cursor: pointer;
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.left-arrow {
  left: 10px;
}

.right-arrow {
  right: 10px;
}

.arrow img {
  width: 30px;
  height: 30px;
}
</style>

<main>
  <h1>Seja Bem-vindo a nossa loja</h1>
  <div class="arrow left-arrow" onclick="prevImage()">
    <img src="images/left.png" alt="Previous">
  </div>
  <div class="arrow right-arrow" onclick="nextImage()">
    <img src="images/right.png" alt="Next">
  </div>
</main>

<script>
var currentImageIndex = 0;
var images = [
  'images/sapato1.jpg',
  'images/sapato3.jpg'
];

function setBackground(imageIndex) {
  document.body.style.backgroundImage = "url('" + images[imageIndex] + "')";
}

function nextImage() {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  setBackground(currentImageIndex);
}

function prevImage() {
  currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
  setBackground(currentImageIndex);
}

setBackground(currentImageIndex);
</script>

<?php include(__DIR__ .'/includes/footer.php'); ?>