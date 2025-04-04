<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Resolve Aí </title>
    <!DOCTYPE html>
    <html lang="en">
<?php 
include('sidebar.php');
include('footer.php');
?>
</head>

<body>


<div>
        <button class="theme-toggle" onclick="toggleTheme()">Alternar Tema</button>
    </div class="theme">
    <script>
        function toggleTheme() {
            document.body.classList.toggle('dark-mode');
        }
    </script>

</body>

</html>