<?php
// Connexion à la base de données avec PDO
$dsn = 'mysql:host=localhost;dbname=supermarche'; // Modifier avec vos informations
$username = 'root'; // Modifier avec votre nom d'utilisateur
$password = ''; // Modifier avec votre mot de passe

try {
    $pdo = new PDO($dsn, $username, $password);
    // Configurer PDO pour qu'il lève des exceptions en cas d'erreur SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('La connexion à la base de données a échoué: '.$e->getMessage());
}

// Requête SQL pour récupérer toutes les lignes de la table "vente"
$sql = 'select  * from produit';
$stmt = $pdo->query($sql);
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

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
           require '../INCLUDE/main.php';
            ?>
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Listes des produits</h2>
                        <a href="../FORMULAIRE/produit_form.php" class="btn">Ajouter un nouveau produit</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nom</td>
                                <td>Catégorie</td>
                                <td>Prix</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($produits as $produit): ?>
                            <tr>
                                <td><?php echo $produit['id']; ?></td>
                                <td><?php echo $produit['produit']; ?></td>
                                <td><?php echo $produit['Type']; ?></td>
                                <td><?php echo $produit['Prix']; ?></td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status return"><i class="fas fa-trash-alt"></i></span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>10 Meilleurs produits</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../IMAGE/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../IMAGE/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../IMAGE/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../IMAGE/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../IMAGE/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../IMAGE/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../IMAGE/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="../IMAGE/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>
                    </table>
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