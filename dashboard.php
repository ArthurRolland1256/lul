<?php
    session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
<p align="center"></p>
<p align="center"></p>
<form align="center" method="POST" action="index.php">
    <input type="submit" name="Log Out" value="Log Out" >
    <?php if(isset($_GET['Log Out']) && $_GET['Log Out'] == '1') {
    session_destroy();
    redirection();
    }
    ?>
</form>
</body>
</html>