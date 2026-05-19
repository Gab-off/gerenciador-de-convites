<?php
session_start();
$_SESSION['logado'] = false;
unset($_SESSION['username']);
header("Location: ../login_page.php");
exit();