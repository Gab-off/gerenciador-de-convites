<?php

session_start();

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
<form action="utilities/user_checkin_validator.php" method="post">
    <label for="user">
        <input type="text" id="user" name="user" placeholder="Nome" required>
    </label>
    <select name="ingresso" id="ingresso">
        <option value="pista">Pista</option>
        <option value="camarote">Camarote</option>
        <option value="vip">VIP</option>
    </select>

    <br>
    <input type="checkbox" id="vegetariano" name="restricoes[]" value="vegetariano"><label for="vegetariano">Vegetariano</label>
    <br>
    <input type="checkbox" id="vegano" name="restricoes[]" value="vegano"><label for="vegano">Vegano</label>
    <br>
    <input type="checkbox" id="intolerante" name="restricoes[]" value="intolerante"><label for="intolerante">Intolerante a lactose</label>
    <br>
    <br>
    
    <input type="submit" value="Confirmar">
</form>
<a href="login_page.php">painel de administração de convidados</a>
</body>
</html>