<?php
require 'connect.php';

if (isset($_POST['addImage'])) {

    $dataImage = [
        'img_link' => 'img/blog/' . $_FILES['image']['name'],
        'img_file' => $_FILES['image']['tmp_name']
    ];

    $data = [
        'title' => htmlspecialchars($_POST['title']),
        'categorie' => $_POST['categorie'],
        'img_link' => $dataImage['img_link'],
        'contenu' => $_POST['contenu']
    ];

    move_uploaded_file($dataImage['img_file'], $dataImage['img_link']);
}

$jeEnvoie = $database->prepare("INSERT INTO blog (blog_titre, blog_cat, blog_photo, blog_contenu) VALUES (:title, :categorie, :img_link, :contenu)");
if ( $jeEnvoie->execute($data) ) {
    header('Location: admin.php');
    exit;
}else {
    echo "Une erreur est survenue à l'ajout de l'articles";
}
?>
