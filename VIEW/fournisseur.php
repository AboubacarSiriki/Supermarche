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
                        <h2>Listes des fournisseurs</h2>
                        <a href="../FORMULAIRE/fournisseur_form.php" class="btn">Ajouter un nouveau fournisseur</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>N°</td>
                                <td>Nom</td>
                                <td>Prénom</td>
                                <td>Email</td>
                                <td>Téléphone</td>
                                <td>Adresse</td>
                                <td>Ville</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Yao</td>
                                <td>Marc</td>
                                <td>Marc@gmail.com</td>
                                <td>+225 055647898</td>
                                <td>BP Abidjan</td>
                                <td>Abidjan</td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status return"><i class="fas fa-trash-alt"></i></span>
                                </td>
                                <tr>
                                <td>1</td>
                                <td>Yao</td>
                                <td>Marc</td>
                                <td>Marc@gmail.com</td>
                                <td>+225 055647898</td>
                                <td>BP Abidjan</td>
                                <td>Abidjan</td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                                <tr>
                                <td>1</td>
                                <td>Yao</td>
                                <td>Marc</td>
                                <td>Marc@gmail.com</td>
                                <td>+225 055647898</td>
                                <td>BP Abidjan</td>
                                <td>Abidjan</td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                                <tr>
                                <td>1</td>
                                <td>Yao</td>
                                <td>Marc</td>
                                <td>Marc@gmail.com</td>
                                <td>+225 055647898</td>
                                <td>BP Abidjan</td>
                                <td>Abidjan</td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                                <tr>
                                <td>1</td>
                                <td>Yao</td>
                                <td>Marc</td>
                                <td>Marc@gmail.com</td>
                                <td>+225 055647898</td>
                                <td>BP Abidjan</td>
                                <td>Abidjan</td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                                <tr>
                                <td>1</td>
                                <td>Yao</td>
                                <td>Marc</td>
                                <td>Marc@gmail.com</td>
                                <td>+225 055647898</td>
                                <td>BP Abidjan</td>
                                <td>Abidjan</td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                                <tr>
                                <td>1</td>
                                <td>Yao</td>
                                <td>Marc</td>
                                <td>Marc@gmail.com</td>
                                <td>+225 055647898</td>
                                <td>BP Abidjan</td>
                                <td>Abidjan</td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                                <tr>
                                <td>1</td>
                                <td>Yao</td>
                                <td>Marc</td>
                                <td>Marc@gmail.com</td>
                                <td>+225 055647898</td>
                                <td>BP Abidjan</td>
                                <td>Abidjan</td>
                                <td>
                                    <span class="status delivered"><i class="fas fa-edit"></i></span>
                                    <span class="status delivered"><i class="fas fa-trash-alt"></i></span>
                                </td>
                                <tr>
                                <td>1</td>
                                <td>Yao</td>
                                <td>Marc</td>
                                <td>Marc@gmail.com</td>
                                <td>+225 055647898</td>
                                <td>BP Abidjan</td>
                                <td>Abidjan</td>
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
                        <h2>10 Meilleurs fournisseurs</h2>
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