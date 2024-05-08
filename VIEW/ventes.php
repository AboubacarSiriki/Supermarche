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
$sql = 'select client.nom,client.sexe,produit.produit,produit.Type,produit.Prix,Date FROM vente JOIN produit on vente.produit_id=produit.id JOIn client On client.id=vente.client_id';
$stmt = $pdo->query($sql);
$ventes = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                        <h2>Listes des ventes</h2>
                        <a href="../FORMULAIRE/ventes_form.php" class="btn">Ajouter une nouvelle vente</a>
                        <a href="#"class="btn">importer données</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Client</td>
                                <td>Sexe</td>
                                <td>Produit</td>
                                <td>Type</td>
                                <td>prix</td>
                                <td>Date</td>
                                <td>Action</td> 
                            </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($ventes as $vente): ?>
                            <tr>
                                <td><?php echo $vente['nom']; ?></td>
                                <td><?php echo $vente['sexe']; ?></td>
                                <td><?php echo $vente['produit']; ?></td>
                                <td><?php echo $vente['Type']; ?></td>
                                <td><?php echo $vente['Prix']; ?></td>
                                <td><?php echo $vente['Date']; ?></td>
                                <td>
                                    <button class="status delivered" onclick="openForm()"><i class="fas fa-edit"></i></button>
                                    <button class="status return" onclick="openForm()"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
            </div>
            
        </div>
    </div>

    <div class="container1">
                <div class="fermer"></div>
                <div class="header">
                    <div class="header1">
                        <div class="logo"></div>
                        <h1 style="color: #2d2989;">RD&V</h1>
                        <p style="color:#34407c"> Rois des Draps et Vaisselles</p>
                        <div class="impot">
                            <h5 style="color:#34407c">CC N° 0901216E</h5><p></p>
                            <h5 style="color:#34407c">Régime d'imposition : Réel normal</h5><p></p>
                            <h5 style="color:#34407c">Centre des impots : CME de PORT-BOUET</h5>
                        </div>
                        <h5 style="color:#34407c">N° / Commande N°:</h5><p></p>
                        <h5 style="color:#34407c">N° / Bon de Livraison N°:</h5>
                    </div>
                    <div class="header1">
                        <h3 style="color:#2d2989">FACTURE 23 319 1036 / </h3><br>
                        <h5 style="color:#34407c">Date :...................................................................................</h5><br>
                        <h5 style="color:#34407c">Client :.................................................................................</h5><br>
                        <h5 style="color:#34407c">Adresse :.............................................................................</h5><br>
                        <h5 style="color:#34407c">C.C :.......................................................................................</h5><br>
                        <h5 style="color:#34407c">N° Compte :.........................................................................</h5>
                    </div>
                </div>
                <div class="tableau">
                <table>
                        <thead>
                            <tr>
                                <td>N°</td>
                                <td>QUANTITE</td>
                                <td>DESIGNATION PRODUITS</td>
                                <td>PRIX UNITAIRE H.T</td>
                                <td>PRIX TOTAL</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>50</td>
                                <td>CIMENTS BLANC </td>
                                <td>3000</td>
                                <td>150.000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>CIMENTS ROUGES </td>
                                <td>2000</td>
                                <td>10.000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>50</td>
                                <td>CIMENTS BLANC </td>
                                <td>3000</td>
                                <td>150.000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>5</td>
                                <td>CIMENTS ROUGES </td>
                                <td>2000</td>
                                <td>10.000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>50</td>
                                <td>CIMENTS BLANC </td>
                                <td>3000</td>
                                <td>150.000</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>5</td>
                                <td>CIMENTS ROUGES </td>
                                <td>2000</td>
                                <td>10.000</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>50</td>
                                <td>CIMENTS BLANC </td>
                                <td>3000</td>
                                <td>150.000</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>5</td>
                                <td>CIMENTS ROUGES </td>
                                <td>2000</td>
                                <td>10.000</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>50</td>
                                <td>CIMENTS BLANC </td>
                                <td>3000</td>
                                <td>150.000</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>5</td>
                                <td>CIMENTS ROUGES </td>
                                <td>2000</td>
                                <td>10.000</td>
                            </tr>
                        </tbody>
                    </table>

                    <table>
                        <thead>
                            <tr>
                                <td>TOTAL HT TVA</td>
                                <td>TAUX TVA</td>
                                <td>MONTANT TTC</td>
                                <td>AIRSI 7.5%</td>
                                <td>TIMBRE</td>
                                <td>NET A PAYER</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>18%</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div><br>
                <p>Arreté la présente facture à la somme de ........................................................................................................</p>
                <p>.....................................................................................................................................................................................</p>
                <p>.....................................................................................................................................................................................</p>
                <p>__________________________________________________________________________________________</p>
                <p style="font-size: 12px; text-align: center;">Rois des Draps et Vaisselles Rois des Draps et Vaisselles Rois des Draps et Vaisselles Rois des Draps et VaissellesRois des Draps et VaissellesRois 
                des Draps et Vaisselles Rois des Draps et VaissellesRois des Draps et Vaisselles Rois des Draps et VaissellesRois des Draps et Vaisselles
                </p>
            </div>

        </div>
    </div>


    <!-- =========== Scripts =========  -->
    <script src="../INCLUDE/main.js"></script>

    <script>

    document.getElementById("openpopup").addEventListener("click", function(){
	document.querySelector(".container1").style.display = "flex";
})

    document.querySelector(".fermer").addEventListener("click", function(){
        document.querySelector(".container1").style.display = "none";    
    })
    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../STYLE/bootstrap.js"></script>
    
</script>

</body>

</html>