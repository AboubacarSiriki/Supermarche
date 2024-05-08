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
                        <h2>Listes des Commandes</h2>
                        <a href="../FORMULAIRE/achats_form.php" class="btn">Passer une nouvelle commande</a>
                        <a href="#"class="btn">importer données</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Fournisseur</td>
                                <td>Montant</td>
                                <td>Paiement</td>
                                <td>Details</td>
                                <td>Date</td>
                                <td>Status</td>
                                <td>Action</td> 
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Soumahoro</td>
                                <td>$1200</td>
                                <td>Espèce</td>
                                <td><button class="status delivered" id="button">Voir</button></td>
                                <td>22/10/2021</td>
                                <td><span class="status pending">Livré</span></td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status return"><i class="fas fa-trash-alt"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Espèce</td>
                                <td><span class="status delivered">Voir</span></td>
                                <td>22/10/2021</td>
                                <td><span class="status return">Non</span></td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status return"><i class="fas fa-trash-alt"></i></span>
                                </td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Espèce</td>
                                <td><span class="status delivered">Voir </span></td>
                                <td>22/10/2021</td>
                                <td><span class="status pending">Livré</span></td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Espèce</td>
                                <td><span class="status delivered">Voir</span></td>
                                <td>22/10/2021</td>
                                <td><span class="status return">Non</span></td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Espèce</td>
                                <td><span class="status delivered">Voir </span></td>
                                <td>22/10/2021</td>
                                <td><span class="status pending">Livré</span></td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Espèce</td>
                                <td><span class="status delivered">Voir</span></td>
                                <td>22/10/2021</td>
                                <td><span class="status return">Non</span></td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Espèce</td>
                                <td><span class="status delivered">Voir </span></td>
                                <td>22/10/2021</td>
                                <td><span class="status pending">Livré</span></td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Espèce</td>
                                <td><span class="status delivered">Voir</span></td>
                                <td>22/10/2021</td>
                                <td><span class="status return">Non</span></td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Espèce</td>
                                <td><span class="status delivered">Voir </span></td>
                                <td>22/10/2021</td>
                                <td><span class="status pending">Livré</span></td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Espèce</td>
                                <td><span class="status delivered">Voir</span></td>
                                <td>22/10/2021</td>
                                <td><span class="status return">Non</span></td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Commandes du jour</h2>
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

    document.getElementById("button").addEventListener("click", function(){
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
</body>

</html>