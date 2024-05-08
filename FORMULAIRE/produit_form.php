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
        <header>Ajout d'un Nouveau produit</header>
        <label for="num_products">Combien de produits voulez-vous ajouter ?</label>
        <input type="number" id="num_products" name="num_products" required>
        <br><br>
        <form action="#">
        <div class="dbl-field">
            <div class="field">
            <input type="text" name="nom" placeholder="Nom produit">
            <i class='fas fa-user'></i>
            </div>
            <div class="field">
            <input type="text" name="categorie" placeholder="Catégorie">
            <i class='fas fa-envelope'></i>
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
            <input type="number" name="quantite" placeholder="Quantité">
            <i class='fas fa-phone-alt'></i>
            </div>
            <div class="field">
            <input type="number" name="prix" placeholder="Prix unitaire">
            <i class='fas fa-globe'></i>
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
            <input type="date" name="dateE" placeholder="Date d'expiation">
            <i class='fas fa-phone-alt'></i>
            </div>
            <div class="field">
            <input type="date" name="DateF" placeholder="Date Fourniture">
            <i class='fas fa-globe'></i>
            </div>
        </div>
        <div class="message">
            <textarea placeholder="Description" name="description"></textarea>
        </div>
        <div class="button-area">
            <button><a href="../VIEW/produit.php" >Annuler</a></button>
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