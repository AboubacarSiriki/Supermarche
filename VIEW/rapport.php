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
        <!-- ========================= Main ==================== -->
        <div class="main">
            
            <?php
           require '../INCLUDE/main_rapport.php';
            ?>
            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <a href="../VIEW/RAPPORT/vente.php" class="card">
                    <div>
                        <div class="cardName">Ventes</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon class="fas fa-chart-bar"></ion-icon>
                    </div>
                </a>

                <div class="card">
                    <div>
                        <div class="cardName">Achats</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="cardName">Clients</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="cardName">Fournisseurs</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
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