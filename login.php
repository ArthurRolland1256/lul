<?php
$fMonFichier = file("C:/laragon/projet/CSV.csv");
foreach ($fMonFichier AS $ligne) {
    echo '<br/>'.$ligne;
}
?><!DOCTYPE.html>
<html lang ="en">
<head>
    <meta charset = "utf-8">
    <title>Login Page</title>
</head>
<body>
<h1 align="center"><input type="email" name="mail" placeholder="exemple@email.ex"></h1>
<h2 align="center"><input type="password" name="pwd" placeholder="Mot de Passe"></h2>
<form align="center" method="POST" action="Dashboard.html">
    <input type="submit" name="Ok" value="Ok" >
</form>
<form align="center" method="POST" action="Forgot_Password.html">
    <input type="submit" name="Mot de passe oublié ?" value="Mot de passe oublié ?" >
</form>
</body>
</html>