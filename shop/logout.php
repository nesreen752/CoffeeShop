<?php
session_start();
session_destroy();
header("Location: login.php");
?>
 <?php if (isset($_SESSION["user"]) && $_SESSION["user"] == "yes"): ?>
            <!-- document.getElementById('userName1').innerHTML = "Login successful!"; -->
        <?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>logout</p>
</body>
</html>