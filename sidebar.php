<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/header.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <div class="sidebar">
        <div class="menu-btn">
          <i class="ph-bold ph-caret-left"></i>
        </div>
        <div class="head">
          <div class="user-img">
            <img src="assets/images/perfil.jpeg" alt="" />
          </div>
          <div class="user-details">
            <p class="title">desenvolvedor web</p>
            <p class="name">Julio Correa</p>
          </div>
        </div>
        <div class="nav">
          <div class="menu">
            <p class="title">Main</p>
            <ul>
              <li>
                <a href="home.php">
                  <i class="icon ph-bold ph-house-simple"></i>
                  <span class="text">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-user"></i>
                  <span class="text">Perfil</span>
                  <i class="arrow ph-bold ph-caret-down"></i>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="perfil.php">
                      <span class="text">User</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text">Subscribers</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="active">
                <a href="mensagens.html">
                  <i class="icon ph-bold ph-file-text"></i>
                  <span class="text">Mensagens</span>
                </a>
              </li>
              <li>
                <a href="calendario.php">
                  <i class="icon ph-bold ph-calendar-blank"></i>
                  <span class="text">Agendamentos</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-chart-bar"></i>
                  <span class="text">Income</span>
                  <i class="arrow ph-bold ph-caret-down"></i>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="#">
                      <span class="text">Earnings</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text">Funds</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text">Declines</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text">Payouts</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="menu">
            <p class="title">Settings</p>
            <ul>
              <li>
                <a href="#">
                  <i class="icon ph-bold ph-gear"></i>
                  <span class="text">Settings</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="menu">
          <p class="title">Account</p>
          <ul>
            <li>
              <a href="#">
                <i class="icon ph-bold ph-info"></i>
                <span class="text">Help</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="icon ph-bold ph-sign-out"></i>
                <span class="text">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
</header>
    <!-- Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
      integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
      crossorigin="anonymous"
    ></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>