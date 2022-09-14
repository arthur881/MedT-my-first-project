<?php
session_start();
require 'connect.php';
$title = 'Med-T Connexion V3';
require('templates/head.template.php');


?>
<body>
    <a class="return" href="index.php"><span class="material-icons-outlined">arrow_back_ios</span><i>Retour</i></a>
    <div class="form-wrapper">
        <h1>Connexion</h1>
        <form action="login.php" method="POST">
            <input type="text" name="mail" placeholder="Mail">
            <input type="password" name="mdp" placeholder="Mot de passe">
            <input id="submitCo" type="submit" value="Se connecter">
        </form>
        <p>Pas encore membre ? Inscrivez vous <a href="inscription.php">ici</a>.</p>
    </div>
</body>
</html>