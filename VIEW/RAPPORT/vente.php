<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport des ventes</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Rapport des ventes par jour, mois et année avec chiffre d'affaires</h1>
    <div class="chart-container">
        <canvas id="ventesChart"></canvas>
    </div>

    <?php

    // Connexion à la base de données avec PDO
    $dsn = 'mysql:host=localhost;dbname=gestion_stock'; // Modifier avec vos informations
    $username = 'root'; // Modifier avec votre nom d'utilisateur
    $password = ''; // Modifier avec votre mot de passe

    try {
        $pdo = new PDO($dsn, $username, $password);
        // Configurer PDO pour qu'il lève des exceptions en cas d'erreur SQL
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Récupérer les données d'analyse des ventes en fonction des jours, mois et année
        $query = 'SELECT DAY(date_vente) AS jour, MONTH(date_vente) AS mois, YEAR(date_vente) AS annee, SUM(prix * quantite) AS chiffre_affaire FROM ventes GROUP BY jour, mois, annee ORDER BY annee, mois, jour';
        $stmt = $pdo->query($query);
        $ventesData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Préparation des données pour le graphique
        $labels = [];
        $chiffreAffaire = [];

        foreach ($ventesData as $vente) {
            $labels[] = $vente['jour'].'/'.$vente['mois'].'/'.$vente['annee'];
            $chiffreAffaire[] = $vente['chiffre_affaire'];
        }
    } catch (PDOException $e) {
        die('La connexion à la base de données a échoué: '.$e->getMessage());
    }
    ?>

    <script>
        var ctx = document.getElementById('ventesChart').getContext('2d');
        var ventesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    label: 'Chiffre d\'affaires',
                    data: <?php echo json_encode($chiffreAffaire); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
