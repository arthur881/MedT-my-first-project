<?php
require '../connect.php';

//variabilisation des champs pseudo, note et avis du form des avis de la page abonnements.php
$pseudo = $_POST['avisPseudo'];
$note = $_POST['avisNote'];
$avisContent = $_POST['avisContent'];


$data = [
    "formPseudo" => $pseudo,
    "formNote" => $note,
    "formAvis" => $avisContent,
];
//preparation de l'envoi dans la bdd (à savoir: où et quoi ?)
$jeEnvoie = $database->prepare("INSERT INTO avis (avis_pseudo, avis_note, avis_content) VALUES (:formPseudo, :formNote, :formAvis)");

//si envoi en bdd réussi alors redirection vers abonnements.php
if ( $jeEnvoie->execute($data) ) {
    header('Location: abonnements.php');
    exit;
}else {
    echo "Une erreur est survenue à l'envoi de l'avis";
}
?>


<br>
<a href="index.php">Retour à l'accueil</a>