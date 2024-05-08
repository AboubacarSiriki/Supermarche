<?php

// Connexion à la base de données avec PDO
$dsn = 'mysql:host=localhost;dbname=gestion_stock'; // Modifier avec vos informations
$username = 'root'; // Modifier avec votre nom d'utilisateur
$password = ''; // Modifier avec votre mot de passe

try {
    $pdo = new PDO($dsn, $username, $password);
    // Configurer PDO pour qu'il lève des exceptions en cas d'erreur SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données d'analyse des achats depuis la base de données
    $query = 'SELECT date_achat, SUM(quantite) AS total_quantite FROM achats GROUP BY date_achat';
    $stmt = $pdo->query($query);
    $achatsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Préparation des données pour le graphique
    $data_labels = [];
    $data_values = [];

    foreach ($achatsData as $row) {
        $data_labels[] = $row['date_achat']; // Dates des achats comme étiquettes
        $data_values[] = $row['total_quantite']; // Total des quantités achetées par date
    }

    // Convertir les données en format JSON pour une utilisation avec JavaScript
    $labels_json = json_encode($data_labels);
    $values_json = json_encode($data_values);
} catch (PDOException $e) {
    die('La connexion à la base de données a échoué: '.$e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport des achats</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Rapport des achats</h1>
    <div class="chart-container">
        <canvas id="achatsChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('achatsChart').getContext('2d');
        var achatsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo $labels_json; ?>,
                datasets: [{
                    label: 'Quantité achetée',
                    data: <?php echo $values_json; ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
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
