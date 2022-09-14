<?php
session_start();
//connexion a la bdd
require 'connect.php';
$title = 'Med-T Accueil V3';
require('templates/head.template.php');
?>

<body>
    <div class="loader">
        <span class="lettre">L</span>
        <span class="lettre">O</span>
        <span class="lettre">A</span>
        <span class="lettre">D</span>
        <span class="lettre">I</span>
        <span class="lettre">N</span>
        <span class="lettre">G</span>
    </div>
    <?php

    require('templates/nav.template.php');

    ?>

    <div class="modal-beta-container" id="modal_beta_container">
        <div class="formulaire">
                <span id="close" class="material-icons-outlined">highlight_off</span>
                <h2 class="formTitle">Inscription à la Beta</h2>
                <p>Pour profiter de nos produits en avant première, veuillez vous incrire à la Beta fermée en remplissant le formulaire suivant.</p>

                <div class="msg-error">
                    <ul></ul>
                </div>
                <div class="msg-sucess">
                    <p>Formulaire envoyé ! Vous êtes bien inscrit(e) à la phase de Beta Med-T.</p>
                </div>
    
                <form action="envoi/envoiBeta.php" method="POST" id="formJs" class="form-modal-beta">
                    <div>
                        <label for="betaNom">Nom</label>
                        <input type="text" name="betaNom" id="nom" placeholder="Merci de saisir votre nom">
                    </div>
    
                    <div>
                        <label for="betaPrenom">Prénom </label>
                        <input type="text" name="betaPrenom" id="prenom" placeholder="Merci de saisir votre prénom">
                    </div>
    
                    <div>
                        <label for="betaEmail">Email</label>
                        <input type="email" name="betaEmail" id="email" placeholder="Merci de saisir votre Email">
                    </div>
    
                    <input type="checkbox" name="accept" required>
                    <label for="accept" class="accepted">J'accepte les conditions d'utilisation.</label>
    
                    <div class="submit">
                        <input type="submit" id="submit" value="Continuer" >
                        <input type="reset" id="reset" value="Réinitialiser" >
                    </div>
                </form>
        </div>
    </div>    

    <main>
        <div class="hero">
            <img src="img/jakob-owens-lkMJcGDZLVs-unsplash-removebg-preview.png" alt="">
            <div class="info">
                <h1>Ne vivez plus dans la crainte de tomber malade</h1>
                <p>Découvrez le T-shirt connecté med-T, la solution pour les personnes soucieuse de leur santé.</p>
                <div class="buttons">
                    <a id="open" href="#">S'inscrire à la Beta</a>
                    <a href="abonnements.php">Acheter</a>
                </div>
            </div>
        </div>

        <div class="uses">
            <h2>Les usages :</h2>
            <div class="uses-container">
                <div class="cardUses">
                    <img src="img/running.png" alt="running icon">
                    <h3>Sport</h3>
                    <p>Traquez vos performances en temps réel et accédez y via l'application.</p>
                </div>
                <div class="cardUses">
                    <img src="img/en-bonne-sante.png" alt="santé icon">
                    <h3>Santé</h3>
                    <p>Sureveillez vos données de santé en temps réel grâce à l'app.</p>
                </div>
                <div class="cardUses">
                    <img src="img/convenient.png" alt="santé icon">
                    <h3>Confort</h3>
                    <p>Grâce a nos capteurs en microfibre  vous ne ressentirez jamais de gène. </p>
                </div>
            </div>
        </div>

        <div class="materials">

            <div class="ranges">
                <div class="m-left">
                    <img src="img/legers.jpg" alt="photo de plume">
                </div>

                <div class="m-right">
                    <h2>Légers :</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum architecto voluptates, consectetur deserunt, provident aut quos eius mollitia iure, laborum voluptatibus assumenda omnis nisi inventore ratione dignissimos hic consequuntur eveniet.</p>
                </div>
            </div>

            <div class="ranges r-img">
                <div class="m-left text">
                    <h2>Résistant :</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum architecto voluptates, consectetur deserunt, provident aut quos eius mollitia iure, laborum voluptatibus assumenda omnis nisi inventore ratione dignissimos hic consequuntur eveniet.</p>

                </div>

                <div class="m-right">
                    <img src="img/resist.jpg" alt="">
                </div>
            </div>

            <div class="ranges">
                <div class="m-left">
                    <img src="img/technical.jpg" alt="">
                </div>

                <div class="m-right">
                    <h2>Pratique :</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum architecto voluptates, consectetur deserunt, provident aut quos eius mollitia iure, laborum voluptatibus assumenda omnis nisi inventore ratione dignissimos hic consequuntur eveniet.</p>
                </div>
            </div>

            <div class="ranges r-img">
                <div class="m-left text">
                    <h2>Fair trade cotton ® :</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum architecto voluptates, consectetur deserunt, provident aut quos eius mollitia iure, laborum voluptatibus assumenda omnis nisi inventore ratione dignissimos hic consequuntur eveniet.</p>
                </div>

                <div class="m-right">
                    <img src="img/cotton.jpg" alt="photo de champ de cotton">
                </div>
            </div>
        </div>

        <hr>
        <h2 class="h2abo">Ils ont laissés leur avis :</h2>

        <?php
        $jeRecup = $database->prepare("SELECT * FROM avis ORDER BY avis_id DESC LIMIT 3");
        $jeRecup->execute();
        $tousLesAvis = $jeRecup->fetchall(PDO::FETCH_ASSOC);

        ?>
        <div class="avisWrapper">
            <?php foreach($tousLesAvis as $avis){ ?>
                
                    <div class="avis">
                        <div class="avisTop">
                            <div class="avisTopLeft">
                            <h4><?= $avis['avis_pseudo'];?></h4>
                            <p><?= $avis['avis_date'];?></p>
                            </div>
                            <h3><?= $avis['avis_note'];?>/5</h3>
                        </div>
                        <p><?= $avis['avis_content'];?></p>
                    </div>
                
            <?php } ?>
        </div>
    </main>
    <?php

    require('templates/footer.template.php');

    ?>
    <script src="js/accueil.js"></script>
</body>
</html>