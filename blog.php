<?php
session_start();
require 'connect.php';
$title = 'Med-T Blog V3';
require('templates/head.template.php');
?>
<body>
    <?php

    require('templates/nav.template.php');

    ?>
    <main>

        <section class="blog">

            <div class="blogRight">
                <div class="filtres">
                    <div id="allCat" class="cat active">
                        <p>All</p>
                    </div>
                    <div id="cat1" class="cat btnCat1">
                        <p>Santé</p>
                    </div>
                    <div id="cat2" class="cat btnCat2">
                        <p>Sport</p>
                    </div>
                    <div id="cat3" class="cat btnCat3">
                        <p>Lifestyle</p>
                    </div>
                </div>

                <?php
    
                // importation des articles de la base de donnée vers notre site
                $jeRecup = $database->prepare("SELECT * FROM blog ORDER BY blog_id DESC");
                $jeRecup->execute();
                $tousLesArticles = $jeRecup->fetchall(PDO::FETCH_ASSOC);

                foreach($tousLesArticles as $articles){ ?>

                    <div class="article <?= $articles['blog_cat'];?> active">
                        <img src="<?= $articles['blog_photo'];?>" alt="photo de l'article">
                        <div class="artWrapper">
                            <div class="articleUpper">
                                <div class="upperLeft">
                                    <h4><?= $articles['blog_titre'];?></h4>
                                    <div class="pastille 
                                    
                                    <?php 
                                    if ($articles['blog_cat'] == 'cat1')
                                    {
                                        echo 'c1';
                                    }elseif ($articles['blog_cat'] == 'cat2')
                                    {
                                        echo 'c2';
                                    }else
                                    {
                                        echo 'c3';
                                    }
                                    ?>

                                    "></div>
                                </div>
                                <div>
                                    <p>00:00</p>
                                </div>
                            </div>
                            <div class="articleContent">
                                <p><?= $articles['blog_contenu'];?></p>
                            </div>
                            <div class="articleLien">
                                <a href="article.php?id=<?= $articles['blog_id']?>">Voir l'article</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                
            </div>
        </section>

    </main>
    <?php

    require('templates/footer.template.php');

    ?>
    <script src="js/blog.js"></script>


</body>
</html>