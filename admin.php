<?php
session_start();
//connexion a la bdd
require 'connect.php';
$title = 'Med-T Admin V3';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">   
    <title><?= $title ?></title>
</head>
<?php
if ($_SESSION['role'] == 0)
{
    header('Location: index.php');
}
?>

<body>

    <a class="return" href="index.php"><span class="material-icons-outlined">arrow_back_ios</span><i>Retour</i></a>

    <div class="admin-wrapper">
        <div class="admin-left">
            <form class="admin-add-art" action="envoiArt.php" method="post" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="Titre de l'article" required>
                <input type="file" name="image" accept=".png, .jpeg, .jpg" name="image" required>
                <select name="categorie" required>
                    <option value="cat1">Santé</option>
                    <option value="cat2">Sport</option>
                    <option value="cat3">Lifestyle</option>
                </select>
                <textarea name="contenu" id="summernote" placeholder="Contenu de l'article" required></textarea>
                <button type="submit" name="addImage">Poster l'article</button>
            </form>
            
        </div>
    
        <div class="admin-right">
            <?php
            $jeRecup = $database->prepare("SELECT * FROM user ORDER BY user_id ASC");
            $jeRecup->execute();
            $tousLesUsers = $jeRecup->fetchall(PDO::FETCH_ASSOC);
            ?>

            <h3>Gestion des utilisateurs :</h3>
            <div class="admin-user-wrapper">
                <?php foreach($tousLesUsers as $user){ ?>
                    <div class="admin-user">
                        <p>#<?= $user['user_id'];?></p>
                        <p><?= $user['user_mail'];?></p>
                        <p>
                            <?php 
                            if ($user['user_role'] == '1')
                            {
                                echo "Admin";
                            }
                            else
                            {
                                echo "Utilisateur";
                            }
                            ?>
                        </p>
                        <form action="delete/setAdmin.php" method="POST" class="formDel">
                            <input type="hidden" name="del" value="<?= $user['user_id']; ?>">
                            <button type="submit" class="buttonDel">Passer admin</button>
                        </form>
                        <form action="delete/deleteUser.php" method="POST" class="formDel">
                            <input type="hidden" name="del" value="<?= $user['user_id']; ?>">
                            <button type="submit" class="buttonDel">Supprimer l'user</button>
                        </form>
                    </div>
                <?php } ?>
            </div>

            <h3>Gestion des articles de blog :</h3>

            <?php
            $jeRecupere = $database->prepare("SELECT * FROM blog ORDER BY blog_id ASC");
            $jeRecupere->execute();
            $tousLesArticles = $jeRecupere->fetchall(PDO::FETCH_ASSOC);
            ?>
            <div class="admin-blog-wrapper">
                <?php foreach($tousLesArticles as $articles){ ?>

                    <div class="admin-blog">
                        <p class="admin-blog-id">#<?= $articles['blog_id']; ?></p>
                        <h4><?= $articles['blog_titre']; ?></h4>
                        <img src="<?= $articles['blog_photo']; ?>" alt="photo du blog">
                        <div class="txt-sppr">
                        <p><?= $articles['blog_contenu']; ?></p>
                        <form action="delete/deleteArt" method="POST" class="formDel-Art">
                                <input type="hidden" name="del" value="<?= $articles['blog_id']; ?>">
                                <button type="submit" class="buttonDel">Supprimer l'article</button>
                            </form>
                        </div>
                    </div>

                <?php } ?>
            </div>

        </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/summernote-lite.min.js"></script>
    <script>
    $('#summernote').summernote({
        width: 800,
        height: 500,
        toolbar: [
            ['font',['bold','italic','underline','clear']],
            ['para',['ul','ol','paragraph']],
        ]
    })
</script>
</body>
</html>
