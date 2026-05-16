<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login_page.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p><a href="utilities/logout.php">Logout</a></p>
    
</body>
</html>

