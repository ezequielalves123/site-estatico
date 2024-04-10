<!-- Ezequiel Alves Morais, Gabriel Souza, Daniela -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,500;1,600&display=swap');

  :root {
    --color-dark1: #dae1e7;
    --color-dark2: #142850;
    --color-dark3: #414141;
    --color-dark4: #00909E;
    --color-dark5: #343434;
  }

  * {
    margin: 0;
    padding: 0;
  }

  body {
    font-family: 'Raleway', Arial, Helvetica, sans-serif;
    background-color: var(--color-dark1);
    color: var(--color-white);

  }

  footer {
    bottom: 0;
    width: 100%;
    text-align: center;
    background-color: var(--color-dark2);
    height: 125px;
    margin-top: 200px;
  }

  .div-footer {
    padding-top: 20px;
  }

  #p-link {
    color: var(--color-dark1);
  }

  .link-footer {
    color: var(--color-white);
    text-decoration: none;
    font-size: 0.9em;
    font-family: 'Raleway', sans-serif;
    padding: 5px;
  }

  .link-footer:hover {
    transition: 0.5s;
    cursor: pointer;
    color: rgba(221, 221, 29, 0.945);
    text-transform: uppercase;
  }

  .img-footer {
    height: 30px;
    width: 30px;
    padding-top: 5px;
  }

  .img-footer:hover {
    transform: scale(1.5);
    transition: 0.5s;
    padding-left: 5px;
    padding-right: 5px;
  }

  .link-image {
    padding-right: 5px;
    padding-left: 5px;
  }
  </style>
</head>

<body>
  <footer>
    <div class="div-footer">
      <p id="p-link"> <a class="link-footer" href="form.html">Ajuda</a> | <a class="link-footer" href="#">Contato</a> |
        <a class="link-footer" href="#">Trabalhe conosco</a> | <a class="link-footer" href="#">Acessibilidade</a> | <a
          class="link-footer" href="#">Política de privacidade</a> | <a class="link-footer" href="#">Trabalhe
          conosco</a>
      </p>
    </div>

    <div class="div-footer">
      <a class="link-image" href="https://instagram.com" target="_blank"><img class="img-footer"
          src="images/logo-do-cone-do-instagram.png" alt="logo-instagram"></a>
      <a class="link-image" href="https://facebook.com" target="_blank"><img class="img-footer"
          src="images/logo-face.png" alt="logo-facebook"></a>
      <a class="link-image" href="https://twitter.com" target="_blank"><img class="img-footer"
          src="images/logo-twitters.png" alt="logo-twitter"></a>
      <a class="link-image" href="https://whatsapp.com" target="_blank"><img class="img-footer"
          src="images/logo-zap.png" alt="logo-whatsapp "></a>
      <a class="link-image" href="https://youtube.com" target="_blank"><img class="img-footer"
          src="images/logo-youtube.png" alt="images/logo-youtube"></a>

    </div>
  </footer>

</body>

</html>