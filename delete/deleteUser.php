<?php
require '../connect.php';

$delID = $_POST['del'];
$donnees =[
    "formDel" => $delID
];

//suppression de l'avis via la récupération de l'ID de l'avis que l'user veut suppr
$jeSupp = $database->prepare("DELETE FROM user WHERE user_id = :formDel");
if ( $jeSupp->execute($donnees) ) {
    header('Location: ../admin.php');
    exit;
}else {
    echo "Une erreur est survenue a la spupression";
}
