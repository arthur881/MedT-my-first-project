<div class="modal-burger">
        <section class="content-burger">
            <div class="input-burger">
                <div>
                    <!-- <img src="img/search_icon.png" alt=""> -->
                    <span class="material-icons-outlined icon">search</span>
                    <p>Recherche</p>
                </div>
                <div>
                    <!-- <img src="img/bag_icon.png" alt=""> -->
                    <span class="material-icons-outlined icon">shopping_bag</span>
                    <p>Panier</p>
                </div>
                <div>
                    <!-- <img src="img/account_icon.png" alt=""> -->
                    <span class="material-icons-outlined icon">account_circle</span>
                    <p>Compte</p>
                </div>
            </div>
            <div class="burger-nav">
                <a href="index.php">Accueil</a>
                <a href="abonnements.php">Abonnements</a>
                <a href="histoire.php">Histoire</a>
                <a href="blog.php">Blog</a>
            </div>
        </section>
        <section class="close"></section>
</div>

    <header>
        <div class="header-container">
            <div class="menu-burger">
                <span class="material-icons-outlined">menu</span>
            </div>

            <a class="logo" href="index.php">MED-T</a>
            <nav>
                <a href="index.php">Accueil</a>
                <a href="abonnements.php">Abonnements</a>
                <a href="histoire.php">Histoire</a>
                <a href="blog.php">Blog</a>
            </nav>
            <div class="icons">
                <span class="material-icons-outlined icon">search</span>
                <span class="material-icons-outlined icon">shopping_bag</span>

                <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 1)
                {
                    echo '<a href="admin.php"><span class="material-icons-outlined icon">settings</span></a>';

                }
                
                
                if (isset($_SESSION['mail']))
                {
                    echo '<a href="logout.php"><span class="material-icons-outlined icon">logout</span></a>';
                }
                else
                {
                    echo '<a href="connexion.php"><span class="material-icons-outlined icon">account_circle</span></a>';
                }
                ?>
                

            </div>
        </div>

    </header>