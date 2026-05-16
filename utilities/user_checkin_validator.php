<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = "";
    $novo_convidado = [];
    $restricoes = $_POST["restricoes"] ?? [];

    if (empty($_POST["username"])) {
        $error = "O nome de usuário é obrigatório.";
    } elseif (empty($restricoes)) {
        $restricoes = ["usuário não tem restrições"];
    } else {
        $novo_convidado = [
            "username" => $_POST["username"],
            "ingresso" => $_POST["ingresso"],
            "restricoes" => $restricoes,
        ];
    }

    if (!empty($error)) {
        $_SESSION["error"] = $error;
        header("Location: ../index.php");
        exit();
    }
}

$_SESSION["novo_convidado"] = $novo_convidado;
header("Location: ../showConvidado.php");
exit();

?>
