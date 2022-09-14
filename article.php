<?php 
session_start();
require 'connect.php';


$id = $_GET['id'];

$jeRecup = $database->prepare("SELECT * FROM blog WHERE blog_id = '$id' ");
$jeRecup->execute();
$article = $jeRecup->fetchall(PDO::FETCH_ASSOC);

$title = 'Med-T article ';
require('templates/head.template.php');

?>
<body>
<a class="return" href="blog.php"><span class="material-icons-outlined">arrow_back_ios</span><i>Retour</i></a>
    <?php foreach($article as $art){ ?>
        <div class="art-big">
            <div>
                <img src="<?= $art['blog_photo']?>" alt="photo du blog">
            </div>
            <h2><?= $art['blog_titre']?></h2>
            <p><?= $art['blog_contenu']?></p>
        </div>
    <?php } ?>
    
</body>
</html>