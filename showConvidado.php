<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$novo_convidado = $_SESSION['novo_convidado'];
unset($_SESSION['novo_convidado']);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Show Convidado</title>
</head>
<body>
    <h1>Show Convidado</h1>
    <p><?php echo $novo_convidado; ?></p>
</body>
</html>
