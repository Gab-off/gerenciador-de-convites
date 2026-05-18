<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}

$lista_convidados = $_SESSION['lista_convidados'];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Show Convidado</title>
</head>
<body>
    <h1>Show Convidado</h1>
    <?php  foreach ($lista_convidados as $value) : ?>
        <?= $value['user'] ?><?= $value['ingresso'] ?><?= $value['restricoes'] ?>
        <?php endforeach ?>
</body>
</html>
