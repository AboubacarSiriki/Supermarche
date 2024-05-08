<!DOCTYPE html>
    <html lang="fr">
        
    <?php
        require '../INCLUDE/head.php';
    ?>

    <body>
        <!-- =============== Navigation ================ -->
        <div class="container">
            
            <?php
            require '../INCLUDE/navigation.php';
            ?>

            <!-- ========================= Main ==================== -->
            <div class="main">
                
                <?php
            require '../INCLUDE/main_recherche.php';
                ?>
    <div class="wrapper">
        <header>Nouveau client</header>
        <form action="#">
        <div class="dbl-field">
            <div class="field">
            <input type="text" name="nom" placeholder="Nom client">
            <i class='fas fa-user'></i>
            </div>
            <div class="field">
            <input type="text" name="prenom" placeholder="Prénom client">
            <i class='fas fa-user'></i>
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
            <input type="text" name="tel" placeholder="Téléphone: +225 0556478900">
            <i class='fas fa-phone-alt'></i>
            </div>
            <div class="field">
            <input type="text" name="email" placeholder="Email client">
            <i class='fas fa-envelope'></i>
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
            <input type="text" name="adresse" placeholder="Adresse">
            <i class='fas fa-phone-alt'></i>
            </div>
            <div class="field">
            <input type="text" name="ville" placeholder="Ville">
            <i class='fas fa-globe'></i>
            </div>
        </div>
        <div class="button-area">
            <button><a href="../VIEW/liste_client.php" >Annuler</a></button>
            <button type="submit">Valider</button>
            <span></span>
        </div>
        </form>
    </div>

            </div>
        </div>

        <!-- =========== Scripts =========  -->
        <script src="../INCLUDE/main.js"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="../STYLE/bootstrap.js"></script>
    </body>

    </html>