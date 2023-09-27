<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = 'Visitante';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>XSS refletido</title>
    </head>
    <body>
        <h1>Olá, <?php echo $name;?>!</h1>
        <form method="get" action="">
            <label for="name">Digite seu nome:</label>
            <input type="text" name="name" id="name">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

