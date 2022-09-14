<?php 
require '../connect.php';


//variabilisation des champs de connexions
$mail = $_POST['mail'];
$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);


//mise en tableau des valeurs récupérée pour faciliter l'envoi en bdd
$donnes = [
    "formMail" => $mail,
    "fomrMdp" => $mdp
];


//preparation de l'envoi en bdd
$jeEnvoie = $database->prepare("INSERT INTO user (user_mail, user_password) VALUES (:formMail, :fomrMdp)");

//redirection vers la page index.php si l'envoi a bien été effectué
if ( $jeEnvoie->execute($donnes) ) {
    header('Location: ../connexion.php');
    exit;
}else {
    echo "Une erreur est survenue à l'inscription";
}


?>
<a href="index.php">Retour à l'accueil</a>