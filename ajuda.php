<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/ajuda.css">
    <title>Ajuda</title>
    <?php
    include('sidebar.php');

    ?>
</head>

<body>
    <div class="container">

        <div class="duvidas">
        <form class="colorful-form">
  <div class="form-group">
    <label class="form-label" for="name">Name:</label>
    <input required="" placeholder="Enter your name" class="form-input" type="text">
  </div>
  <div class="form-group">
    <label class="form-label" for="email">Email:</label>
    <input required="" placeholder="Enter your email" class="form-input" name="email" id="email" type="email">
  </div>
  <div class="form-group">
    <label class="form-label" for="message">Message:</label>
    <textarea required="" placeholder="Enter your message" class="form-input" name="message" id="message"></textarea>
  </div>
  <button class="form-button" type="submit">Submit</button>
</form>
        </div>
        <div class="imagem">

        </div>
        <div class="texto">
            <h1>Ajuda</h1>
            <p>Se você está com dúvidas, entre em contato conosco através do e-mail:
                <a href="mailto:julio.correa@alunos.sc.senac.br">
                    Contate-Nos
                </a>
            </p>
        </div>
        <footer>

        </footer>
</body>

</html>