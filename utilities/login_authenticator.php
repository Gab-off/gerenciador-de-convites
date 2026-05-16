<?php

session_start();

$_SESSION['username'] = $_POST['username'];

if (empty($_SESSION['username'])) {
    header('Location: ../login_page.php');
    exit();
} else {
    header('Location: ../painel_adm.php');
    exit();
}
