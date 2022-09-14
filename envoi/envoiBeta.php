<?php
require '../connect.php';

//creation du code de parrainage

function randomGenerator($longueur = 10)
{
    //str_repeat -> pour repeter la chaine de caractères
    //str_shuffle -> pour melanger la chaine de caract
    //str_substr -> pour soustraire le nombre voulu de caractère de la chaine 
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($longueur/strlen($x)) )),1,$longueur);
}

//variabilisation des champs nom, prenom et mail du form d'inscription a la beta de la page index.php
$nom = $_POST['betaNom'];
$prenom = $_POST['betaPrenom'];
$mail = $_POST['betaEmail'];
$code = randomGenerator();


$data = [
    "formNom" => $nom,
    "formPrenom" => $prenom,
    "formMail" => $mail,
    "formCode" => $code
];
//preparation de l'envoi dans la bdd (à savoir: où et quoi ?)
$jeEnvoie = $database->prepare("INSERT INTO beta (beta_nom, beta_prenom, beta_mail, beta_code) VALUES (:formNom, :formPrenom, :formMail, :formCode)");

//si envoi en bdd réussi alors redirection vers index.php
if ( $jeEnvoie->execute($data) ) {
    header('Location: ../inscriptionBeta.php');
    exit;
}else {
    echo "Une erreur est survenue à l'envoi de l'avis";
}
?>


<br>
<a href="index.php">Retour à l'accueil</a>