
<?php
  session_start();
  $perfil = array(
    'nome' => $_SESSION['nome'],
    'email' => $_SESSION['email']
  );
  $tema = $_SESSION['tema'] ?? 'claro';
  $notificacoes = $_SESSION['notificacoes'] ?? array('email' => true, 'push' => true);
  $privacidade = $_SESSION['privacidade'] ?? array('senha' => '', 'logout' => false);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Configurações</title>
  <link rel="stylesheet" href="assets/css/config.css">
</head>
<body>
  <div class="container">
    <div class="menu-lateral">
      <ul>
        <li><a href="#perfil" class="active">Perfil</a></li>
        <li><a href="#tema">Tema</a></li>
        <li><a href="#notificacoes">Notificações</a></li>
        <li><a href="#privacidade">Privacidade</a></li>
      </ul>
    </div>
    <div class="conteudo">
      <div id="perfil" class="aba active">
        <h2>Perfil</h2>
        <form id="form-perfil">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" value="<?php echo $perfil['nome']; ?>">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" value="<?php echo $perfil['email']; ?>">
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha">
          <button type="submit">Salvar</button>
        </form>
      </div>
      <div id="tema" class="aba">
        <h2>Tema</h2>
        <form id="form-tema">
          <label for="tema-claro">Claro</label>
          <input type="radio" id="tema-claro" name="tema" value="claro" <?php echo $tema == 'claro' ? 'checked' : ''; ?>>
          <label for="tema-escuro">Escuro</label>
          <input type="radio" id="tema-escuro" name="tema" value="escuro" <?php echo $tema == 'escuro' ? 'checked' : ''; ?>>
          <button type="submit">Salvar</button>
        </form>
      </div>
      <div id="notificacoes" class="aba">
        <h2>Notificações</h2>
        <form id="form-notificacoes">
          <label for="notificacoes-email">E-mail:</label>
          <input type="checkbox" id="notificacoes-email" name="notificacoes-email" <?php echo $notificacoes['email'] ? 'checked' : ''; ?>>
          <label for="notificacoes-push">Push:</label>
          <input type="checkbox" id="notificacoes-push" name="notificacoes-push" <?php echo $notificacoes['push'] ? 'checked' : ''; ?>>
          <button type="submit">Salvar</button>
        </form>
      </div>
      <div id="privacidade" class="aba">
        <h2>Privacidade</h2>
        <form id="form-privacidade">
          <label for="senha-privacidade">Senha:</label>
          <input type="password" id="senha-privacidade" name="senha-privacidade">
          <label for="logout-privacidade">Logout de todas as sessões:</label>
          <input type="checkbox" id="logout-privacidade" name="logout-privacidade" <?php echo $privacidade['logout'] ? 'checked' : ''; ?>>
          <button type="submit">Salvar</button>
        </form>
      </div>
    </div>
  </div>
  <script src="assets/js/config.js"></script>
</body>
</html>

