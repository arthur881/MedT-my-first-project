<?php
//connexion à la bdd
try {
    $database = new PDO("mysql:host=localhost;dbname=medt", "root", "");
} catch(PDOExeption $error){
    echo $error;
    die;
}