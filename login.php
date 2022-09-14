<?php 
session_start();
require 'connect.php';


$mail = $_POST['mail'];
$mdp = $_POST['mdp'];

$jeRecup = $database->prepare("SELECT * FROM user WHERE user_mail = '$mail' ");
$jeRecup->execute();

/*rowcount() permet de retourner le nbr de ligne affecté par le dernier appel de la fonction PDO */
if($jeRecup->rowcount() > 0)
{
    $data = $jeRecup->fetchall();
    if (password_verify($mdp, $data[0]["user_password"]))
    {
        header('Location: index.php');
        $_SESSION['mail'] = $mail;
        $_SESSION['role'] = $data[0]["user_role"];
    }
    else
    {
        echo "Mauvais id ou mdp";
    }
}
?>
<a class="return" href="index.php"><span class="material-icons-outlined">arrow_back_ios</span>Retour</a>

