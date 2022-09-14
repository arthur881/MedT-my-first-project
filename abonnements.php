<?php
session_start();
//connexion a la bdd
require 'connect.php';
$title = 'Med-T Abonnements V3';
require('templates/head.template.php');
?>
<body>
    <?php

    require('templates/nav.template.php');

    ?>
    <div class="modal-tee-container" id="modal_tee_container">
        <div class="modal-tee">
            <div class="modal-tee-img">
                <p id="close"><span class="material-icons-outlined">arrow_back</span>Retour</p>
                <img id="modalImg" src="img/Tshirts/DFN.jpg" alt="debardeur connecté pour femme">
            </div>
            <div class="modal-tee-details">
                <h2 class="h2abo" id="modalTitle">Debardeur connecté</h2>
                <p id="modalTxt">Debardeur pour femme</p>
                <p id="modalPrice">49,99€</p>
                <div class="details-colors">
                    <div class="lilSqare black"></div>
                    <div class="lilSqare white"></div>
                    <div class="lilSqare grey"></div>
                    <div class="lilSqare blue"></div>
                </div>
                <div class="details-size">
                    <span class="active">S</span>
                    <span class="">M</span>
                    <span class="">L</span>
                    <span class="">XL</span>
                </div>
                <button>Ajouter au panier</button>
                <p class="details-txt">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem in neque aspernatur porro voluptas autem veritatis tempore ducimus cupiditate dolore.</p>
            </div>
        </div>

    </div>


    <main class="mainAbo">
        <div class="Tshirt-container">
            <div class="upper">
                <h2 class="h2abo">Notre gamme de T-shirt connectés :</h2>
                <div class="filters">
                    <p>Trier par</p>
                    <span class="material-icons-outlined">expand_more</span>
                </div>
            </div>

            <div class="content">
                <div class="t-card">
                    <img id="big-one" src="img/Tshirts/DFN.jpg" alt="debardeur connecté pour femme">
                    <div class="colors">
                        <div class="lilSqare black c1"></div>
                        <div class="lilSqare white c1"></div>
                        <div class="lilSqare grey c1"></div>
                        <div class="lilSqare blue c1"></div>
                    </div>
                    <p>Débardeur connecté pour femme<br>49,99 €</p>
                </div>

                <div class="t-card">
                    <img id="big-two" src="img/Tshirts/THG.jpg" alt="T-shirt connecté unisexe">
                    <div class="colors">
                        <div class="lilSqare black c2"></div>
                        <div class="lilSqare white c2"></div>
                        <div class="lilSqare grey c2"></div>
                        <div class="lilSqare blue c2"></div>
                    </div>
                    <p>T-shirt connecté unisexe<br>59,99 €</p>
                </div>

                <div class="t-card">
                    <img id="big-three" src="img/Tshirts/DHN.jpg" alt="debardeur connecté pour homme">
                    <div class="colors">
                        <div class="lilSqare black c3"></div>
                        <div class="lilSqare white c3"></div>
                        <div class="lilSqare grey c3"></div>
                        <div class="lilSqare blue c3"></div>
                    </div>
                    <p>Débardeur connecté pour homme<br>49,99 €</p>
                </div>

                <div class="t-card">
                    <img id="big-four" src="img/Tshirts/MHN.jpg" alt="T-shirtmanche longues connecté unisexe">
                    <div class="colors">
                        <div class="lilSqare black c4"></div>
                        <div class="lilSqare white c4"></div>
                        <div class="lilSqare grey c4"></div>
                        <div class="lilSqare blue c4"></div>
                    </div>
                    <p>T-shirt manche longues connecté unisexe<br>64,99 €</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="abo-container">
            <h2 class="h2abo">Notre concepteur d'abonnements :</h2>
            <p class="txt-info">Pour profiter au maximum de votre experience grâce aux 
                med-T souscrivez à l'abonnement en ajoutant les différentes options ci-dessous :
            </p>
            <div class="abonnements">
                <div class="options">

                    <div class="choix">
                        <div class="choix-upper">
                            <h3>Option 1</h3>
                            <div class="upper-L">
                                <p>1 €/mois</p>
                                <input class="add-btn" type="checkbox">
                            </div>
                        </div>
                        <img src="img/heart-attack.png" alt="heart beating icon">
                        <p>Grace a cette option vous pourrez suivre en temps réel vos de données de l'option 1 sur l'application med-T.</p>
                    </div>

                    <div  class="choix">
                        <div class="choix-upper">
                            <h3>Option 2</h3>
                            <div class="upper-L">
                                <p>2 €/mois</p>
                                <input class="add-btn" type="checkbox">
                            </div>
                        </div>
                        <img src="img/heart-attack.png" alt="heart beating icon">
                        <p>Grace à cette option vous pourrez suivre en temps réel vos de données de l'option 1 sur l'application med-T.</p>
                    </div>

                    <div id="option3" class="choix">
                        <div class="choix-upper">
                            <h3>Option 3</h3>
                            <div class="upper-L">
                                <p>3 €/mois</p>
                                <input class="add-btn" type="checkbox">
                            </div>
                        </div>
                        <img src="img/heart-attack.png" alt="heart beating icon">
                        <p>Grace à cette option vous pourrez suivre en temps réel vos de données de l'option 1 sur l'application med-T.</p>
                    </div>

                    <div id="option4" class="choix">
                        <div class="choix-upper">
                            <h3>Option 4</h3>
                            <div class="upper-L">
                                <p>4 €/mois</p>
                                <input class="add-btn" type="checkbox">
                            </div>
                        </div>
                        <img src="img/heart-attack.png" alt="heart beating icon">
                        <p>Grace à cette option vous pourrez suivre en temps réel vos de données de l'option 1 sur l'application med-T.</p>
                    </div>

                    <div id="option5" class="choix">
                        <div class="choix-upper">
                            <h3>Option 5</h3>
                            <div class="upper-L">
                                <p>5 €/mois</p>
                                <input class="add-btn" type="checkbox">
                            </div>
                        </div>
                        <img src="img/heart-attack.png" alt="heart beating icon">
                        <p>Grace à cette option vous pourrez suivre en temps réel vos de données de l'option 1 sur l'application med-T.</p>
                    </div>

                    <div id="option6" class="choix">
                        <div class="choix-upper">
                            <h3>Option 6</h3>
                            <div class="upper-L">
                                <p>6 €/mois</p>
                                <input class="add-btn" type="checkbox">
                            </div>
                        </div>
                        <img src="img/heart-attack.png" alt="heart beating icon">
                        <p>Grace à cette option vous pourrez suivre en temps réel vos de données de l'option 1 sur l'application med-T.</p>
                    </div>
                </div>
                
                <div class="panier">
                    <div class="panier-upper">
                        <h3>Vos options :</h3>
                        <div id="supprBtn" class="clear-all">
                            <p>Tout supprimer</p>
                            <span class="material-icons-outlined">highlight_off</span>
                        </div>
                    </div>
                    <div id="choices-wrapper"></div>
                        <div class="choices" id="choix1">
                            <div class="panier-L">
                                <h4>Option 1</h4>
                                <p>+ 1 €/mois</p>
                            </div>
                            <div class="panier-R">
                                <p>Supprimer</p>
                                <span class="material-icons-outlined">remove_circle_outline</span>
                            </div>
                        </div>
                        <div class="choices" id="choix2">
                            <div class="panier-L">
                                <h4>Option 2</h4>
                                <p>+ 2 €/mois</p>
                            </div>
                            <div class="panier-R">
                                <p>Supprimer</p>
                                <span class="material-icons-outlined">remove_circle_outline</span>
                            </div>
                        </div>
                        <div class="choices" id="choix3">
                            <div class="panier-L">
                                <h4>Option 3</h4>
                                <p>+ 3 €/mois</p>
                            </div>
                            <div class="panier-R">
                                <p>Supprimer</p>
                                <span class="material-icons-outlined">remove_circle_outline</span>
                            </div>
                        </div>
                        <div class="choices" id="choix4">
                            <div class="panier-L">
                                <h4  >Option 4</h4>
                                <p>+ 4 €/mois</p>
                            </div>
                            <div class="panier-R">
                                <p>Supprimer</p>
                                <span class="material-icons-outlined">remove_circle_outline</span>
                            </div>
                        </div>
                        <div class="choices" id="choix5">
                            <div class="panier-L">
                                <h4>Option 5</h4>
                                <p>+ 5 €/mois</p>
                            </div>
                            <div class="panier-R">
                                <p>Supprimer</p>
                                <span class="material-icons-outlined">remove_circle_outline</span>
                            </div>
                        </div><div class="choices" id="choix6">
                            <div class="panier-L">
                                <h4  >Option 6</h4>
                                <p>+ 6 €/mois</p>
                            </div>
                            <div class="panier-R">
                                <p>Supprimer</p>
                                <span class="material-icons-outlined">remove_circle_outline</span>
                            </div>
                        </div>
                    
                    <div id="panierBottom" class="panier-bottom">
                        <div class="total">
                            <p>Total :</p>
                            <p><strong><span id="price">0</span> €/mois</strong></p>
                        </div>
                        <p class="cash">Payer</p>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h2 class="h2abo">Ils ont laissés leur avis :</h2>

        <section class="AvisGlobalWrapper"> 
            <form id="avisForm" action="./envoi/envoiAvis.php" method="POST">
                <p>Laissez nous votre avis !</p>
                <div class="avisFormTop">
                    <input type="text" name="avisPseudo" id="" placeholder="Entrez votre pseudo" required>
                    <div>
                        <label for="avisNote">Note /5</label>
                        <select name="avisNote" id="" required>
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <input type="text" name="avisContent" placeholder="Laissez nous votre avis" required>
                <button type="submit">Poster l'avis</button>
            </form>

            <?php
    
            // importation des avis de la base de donnée vers notre site
            $jeRecup = $database->prepare("SELECT * FROM avis ORDER BY avis_id DESC");
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

                            <?php if (isset($_SESSION['mail']))
                            { ?>
                                <form action="delete/deleteAvis.php" method="POST" class="formDel">
                                    <input type="hidden" name="del" value="<?= $avis["avis_id"]; ?>">
                                    <button type="submit" class="buttonDel">Supprimer l'avis</button>
                                </form>
                            <?php } ?>
                            
                        </div>
                    
                <?php } ?>
            </div>
        </section>

    </main>
    <?php

    require('templates/footer.template.php');

    ?>
    <script src="js/abonnements.js"></script>

</body>
</html>