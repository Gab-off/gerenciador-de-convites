<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 var_dump($_POST);   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confirmador de presença</title>
</head>
<body>
    <h1>Digite seu nome e escolha seu ingresso: </h1>
<form action="" method="post">
    <label for="user">
        <input type="text" id="user" name="user" placeholder="Nome" required>
    </label>
    <select name="ingresso" id="ingresso">
        <option value="pista">Pista</option>
        <option value="camarote">Camarote</option>
        <option value="vip">VIP</option>
    </select>

    <br>
    <input type="checkbox" id="vegetariano" name="restricoes[]"><label for="vegetariano">Vegetariano</label>
    <br>
    <input type="checkbox" id="vegano" name="restricoes[]"><label for="vegano">Vegano</label>
    <br>
    <input type="checkbox" id="intolerante" name="restricoes[]"><label for="intolerante">Intolerante a lactose</label>
    <br>
    <br>
    
    <input type="submit" value="Confirmar">
</form>
<a href="login_page.php">painel de administração de convidados</a>
</body>
</html>