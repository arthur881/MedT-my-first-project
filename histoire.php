<?php
session_start();

$title = 'Med-T Histoire V3';
require('templates/head.template.php');
?>
<body>
    <?php

    require('templates/nav.template.php');

    ?>
    <main>
        <h1 id="titreAnim" class="who">Qui sommes nous ?</h1>
        <div class="pres">
            
            <div class="photos">
                <img src="img/quentin.png" alt="photo de profil de Quentin">
                <p>Quentin</p>
            </div>
            <div class="photos">
                <img src="img/benj.png" alt="photo de profil de Benjamin">
                <p>Benjamin</p>
            </div>
            <div class="photos">
                <img src="img/hugo.png" alt="photo de profil de Hugo">
                <p>Hugo</p>
            </div>
        </div>
        
        <h2 class="deuxiemeTitre">Notre idée :</h2>
        <p class="deuxiemeP">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam quia eius quo quos, distinctio qui at, rem assumenda cumque fugiat eligendi corporis maiores, error veniam ipsum magnam tenetur enim. Laboriosam rem sed assumenda. Eveniet veniam illum iure totam maiores. Sapiente, quam! Odio, architecto? Ad iure animi minus error aliquid accusantium dolorum illo aperiam asperiores voluptatum quae obcaecati facilis repudiandae a optio veniam sed, omnis provident et doloremque praesentium commodi? Placeat velit veniam et, modi alias reprehenderit voluptates distinctio pariatur ipsum rerum aperiam quo possimus enim, dolore a eveniet neque ullam vel veritatis. A, libero odio?
        </p>
        <hr>

        <div class="frise">
            <h2 class="title">Chaque chose en son temps !</h2>
            <div class="wrapper">
                <div class="colG">
                    <section class="full">
                        <div class="details">
                            <h2 class="blackH2">Titre de section gauche</h2>
                            <p>1st Jan 2021</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ducimus in, temporibus vero quas nulla sed totam aspernatur reprehenderit necessitatibus!</p>
                        <div class="bottom">
                            <p class="read-more-btn">Read more</p>
                            <i>UNSC</i>
                        </div>
                    </section>
                    <section class="empty"></section>
                    <section class="full">
                        <div class="details">
                            <h2 class="blackH2">Titre de section gauche</h2>
                            <p>1st Jan 2021</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ducimus in, temporibus vero quas nulla sed totam aspernatur reprehenderit necessitatibus!</p>
                        <div class="bottom">
                            <p>Read more</p>
                            <i>Foreners</i>
                        </div>
                    </section>
                    <section class="empty"></section>
                </div>
                
                <div class="colCentre"></div>
                <div class="colD">
                    <section class="empty"></section>
                    <section class="full">
                        <div class="details">
                            <h2 class="blackH2">Titre de section droite</h2>
                            <p>2nd Jan 2021</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ducimus in, temporibus vero quas nulla sed totam aspernatur reprehenderit necessitatibus!</p>
                        <div class="bottom">
                            <p>Read more</p>
                            <i>Covenants</i>
                        </div>
                    </section>
                    <section class="empty"></section>
                    <section class="full">
                        <div class="details">
                            <h2 class="blackH2">Titre de section droite</h2>
                            <p>2nd Jan 2021</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ducimus in, temporibus vero quas nulla sed totam aspernatur reprehenderit necessitatibus!</p>
                        <div class="bottom">
                            <p>Read more</p>
                            <i>Covenants</i>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </main>
    <?php

    require('templates/footer.template.php');

    ?>
    <script src="js/histoire.js"></script>
</body>
</html>