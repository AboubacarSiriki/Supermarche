<?php

// Connexion à la base de données avec PDO
$dsn = 'mysql:host=localhost;dbname=gestion_stock'; // Modifier avec vos informations
$username = 'root'; // Modifier avec votre nom d'utilisateur
$password = ''; // Modifier avec votre mot de passe

try {
    $pdo = new PDO($dsn, $username, $password);
    // Configurer PDO pour qu'il lève des exceptions en cas d'erreur SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données d'analyse des clients en fonction des achats depuis la base de données
    $query = 'SELECT c.nom, c.prenom, SUM(a.quantite) AS total_achats FROM achats AS a JOIN client AS c ON a.id_client = c.id_client GROUP BY c.nom, c.prenom';
    $stmt = $pdo->query($query);
    $clientsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Préparation des données pour le graphique
    $data_labels = [];
    $data_values = [];

    foreach ($clientsData as $row) {
        $client_name = $row['prenom'].' '.$row['nom']; // Nom complet du client
        $data_labels[] = $client_name; // Nom du client comme étiquette
        $data_values[] = $row['total_achats']; // Total des achats par client
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
    <title>Rapport des clients en fonction des achats</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Rapport des clients en fonction des achats</h1>
    <div class="chart-container">
        <canvas id="clientsChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('clientsChart').getContext('2d');
        var clientsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo $labels_json; ?>,
                datasets: [{
                    label: 'Total des achats',
                    data: <?php echo $values_json; ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
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
