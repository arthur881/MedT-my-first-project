<?php
require 'connect.php';
$title = 'Med-T Inscription V3';
require('templates/head.template.php');
?>
<body>
    <a class="return" href="index.php"><span class="material-icons-outlined">arrow_back_ios</span><i>Retour</i></a>
    <div class="form-wrapper">
        <h1>S'incrire</h1>
        <form action="envoi/envoiUser.php" method="POST">
            <input type="text" name="mail" placeholder="Mail">
            <input type="password" name="mdp" placeholder="Mot de passe">
            <input type="password" placeholder="confirmation mot de passe">
            <input id="submit" type="submit" value="S'isncrire">
        </form>
        <p>Déjà membre ? Connectez vous <a href="connexion.php">ici</a>.</p>
    </div>
</body>
</html>