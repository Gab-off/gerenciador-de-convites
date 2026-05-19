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
<style>
    table, th, td {
        border: 1px solid #ddd;
        border-collapse: collapse;
    }
</style>
<body>
    <h1>Confirmados até o momento: <?= count($lista_convidados) ?></h1>
    <table>
        <thead>
            <tr>
                <th>Convidado</th>
                <th>Ingresso</th>
                <th>Restrições</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach ($lista_convidados as $value) : ?>
            <tr>
                <td><?= $value['user'] ?></td>
                <td><?= $value['ingresso'] ?></td>
                <td><?= implode(', ', $value['restricoes']) ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
