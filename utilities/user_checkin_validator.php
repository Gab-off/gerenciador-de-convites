<?php

session_start();

$validateIngressos = ['pista', 'camarote', 'vip'];
$validateRestricoes = ['vegetariano', 'vegano', 'intolerante' ];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = "";

    $user = htmlspecialchars($_POST['user']) ;
    $ingresso = $_POST['ingresso'];
    $restricoes = $_POST['restricoes'] ?? [];

    if (!in_array($ingresso, $validateIngressos)) {
    $error = 'Opção inválida de ingresso, escolha uma opção válida';
    } else {
        foreach ($restricoes as $restricao) {
            if (!in_array($restricao, $validateRestricoes)) {
                $error = 'Opção de restrição inválida, escolha uma opção válida';
                break;
            }
        }    
    }

    if (empty($error)) {
        $convite_finalizado = [
            'user'=> $user,
            'ingresso'=> $ingresso,
            'restricoes'=> $restricoes
        ];
    
        $_SESSION["lista_convidados"][] = $convite_finalizado;
        $_SESSION['success'] = "Seu ingresso foi adicionado com sucesso na lista.";
    } else {
        $_SESSION["error"] = $error;
    }

    header("Location: ../index.php");
    exit;
}
