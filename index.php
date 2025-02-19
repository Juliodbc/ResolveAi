    
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Resolve Aí </title>
    <!DOCTYPE html>
    <html lang="en">
</head>

<body>

    <header>
        <div class="container">
        <nav class="navbar navbar-dark bg-dark p-3 d-flex justify-content-between">
        <button class="btn btn-outline-light" onclick="toggleDrawer()">
            <i class="fas fa-bars"></i>
        </button>
        <h1 class="text-white m-0">Minha Aplicação</h1>
        <a href="login.php" class="btn btn-outline-light">
            <i class="fas fa-user"></i> Login
        </a>
    </nav>
    
    <div id="drawer" class="drawer">
        <a href="#" onclick="toggleDrawer()">&times; Fechar</a>
        <a href="index.php">Home</a>
        <a href="config.php">Configurações</a>
        <a href="about.php">Sobre</a>
        <a href="contact.php">Contate-nos</a>
    </div>
            
        </div>
    </header>
    <div>
        <button class="theme-toggle" onclick="toggleTheme()">Alternar Tema</button>
    </div class="theme">
    <section class="hero">
        <div class="scripts">
            <h2>Encontre o Profissional Ideal</h2>
            <p>Conectamos você aos melhores prestadores de serviço da sua região.</p>
            <button>Explorar Serviços</button>
        </div>
    </section>

    <section class="destaques">

        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Marketplace de Serviços. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        function toggleTheme() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>

</html>