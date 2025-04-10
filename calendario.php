<?php include('sidebar.php'); 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Calendário - Resolve Aí</title>
  <link rel="stylesheet" href="assets/css/calendario.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap">
</head>
<body>
  <div class="calendar-container">
    <header>
      <h1>Calendário de Agendamentos</h1>
      <div class="calendar-nav">
        <button id="prevMonth">◀</button>
        <span id="monthYear"></span>
        <button id="nextMonth">▶</button>
      </div>
    </header>
    <table id="calendar">
      <thead>
        <tr>
          <th>Dom</th><th>Seg</th><th>Ter</th><th>Qua</th><th>Qui</th><th>Sex</th><th>Sáb</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>

  <script src="assets/js/calendario.js"></script>
</body>
</html>

