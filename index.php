<?php
// Obtendo os agendamentos

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Compromissos</title>
</head>
<body>
    <h2>Agendamentos</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Descrição</th>
        </tr>
        <?php foreach ($agendamentos as $agenda): ?>
            <tr>
                <td><?= htmlspecialchars($agenda['nome']) ?></td>
                <td><?= date("d/m/Y", strtotime($agenda['data'])) ?></td>
                <td><?= date("H:i", strtotime($agenda['hora'])) ?></td>
                <td><?= htmlspecialchars($agenda['descricao']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Adicionar Agendamento</h2>
    <form action="add.php" method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br>

        <label>Data:</label><br>
        <input type="date" name="data" required><br>

        <label>Hora:</label><br>
        <input type="time" name="hora" required><br>

        <label>Descrição:</label><br>
        <textarea name="descricao"></textarea><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
