<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['error'] = '';
    $username = htmlspecialchars($_POST['username'] ?? '');
    $password = $_POST['password'] ?? ''; 
    
    $username = trim($username);
    
    // Validade username
    if (empty($username)) {
        $_SESSION['error'] = 'Username is required';
        header('Location: ../login_page.php');
        exit();
    } elseif ($username !== 'admin') {
        $_SESSION['error'] = 'Invalid username';
        header('Location: ../login_page.php');
        exit();
    } 

    // Validate password
    if (empty($password)) {
        $_SESSION['old_username'] = $username;
        $_SESSION['error'] = 'Password is required';
        header('Location: ../login_page.php');
        exit();
    } elseif ($password !== 'admin') {
        $_SESSION['old_username'] = $username;
        $_SESSION['error'] = 'Invalid password';
        header('Location: ../login_page.php');
        exit();
    }

    // Set the variable for logged in true and username
    $_SESSION['logado'] = true;
    $_SESSION['username'] = $username;

    // Redirect to the admin panel
    header('Location: ../painel_adm.php');
    exit();
} else {
    // Redirect to the login page if the request method is not POST
    header('Location: ../login_page.php');
    exit();
}

