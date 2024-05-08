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
            require '../INCLUDE/main_rapport.php';
                ?>
    <div class="wrapper">
        <header>Nouvelle commande</header>
        <form action="#">
        <div class="dbl-field">
            <div class="field">
            <input type="text" name="name" placeholder="Enter your name">
            <i class='fas fa-user'></i>
            </div>
            <div class="field">
            <input type="text" name="email" placeholder="Enter your email">
            <i class='fas fa-envelope'></i>
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
            <input type="text" name="phone" placeholder="Enter your phone">
            <i class='fas fa-phone-alt'></i>
            </div>
            <div class="field">
            <input type="text" name="website" placeholder="Enter your website">
            <i class='fas fa-globe'></i>
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
            <input type="text" name="phone" placeholder="Enter your phone">
            <i class='fas fa-phone-alt'></i>
            </div>
            <div class="field">
            <input type="text" name="website" placeholder="Enter your website">
            <i class='fas fa-globe'></i>
            </div>
        </div>
        <div class="message">
            <textarea placeholder="Write your message" name="message"></textarea>
        </div>
        <div class="button-area">
            <button><a href="../VIEW/achats.php" >Annuler</a></button>
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