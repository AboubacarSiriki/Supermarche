<?php

// Connexion à la base de données avec PDO
$dsn = 'mysql:host=localhost;dbname=gestion_stock'; // Modifier avec vos informations
$username = 'root'; // Modifier avec votre nom d'utilisateur
$password = ''; // Modifier avec votre mot de passe

try {
    $pdo = new PDO($dsn, $username, $password);
    // Configurer PDO pour qu'il lève des exceptions en cas d'erreur SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données d'analyse des fournisseurs en fonction des achats depuis la base de données
    $query = 'SELECT f.nom, f.prenom, SUM(a.quantite) AS total_achats FROM achats AS a JOIN fournisseur AS f ON a.id_fournisseur = f.id_fournisseur GROUP BY f.nom, f.prenom';
    $stmt = $pdo->query($query);
    $fournisseursData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Préparation des données pour le graphique
    $data_labels = [];
    $data_values = [];

    foreach ($fournisseursData as $row) {
        $fournisseur_name = $row['prenom'].' '.$row['nom']; // Nom complet du fournisseur
        $data_labels[] = $fournisseur_name; // Nom du fournisseur comme étiquette
        $data_values[] = $row['total_achats']; // Total des achats par fournisseur
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
    <title>Rapport des fournisseurs en fonction des achats</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Rapport des fournisseurs en fonction des achats</h1>
    <div class="chart-container">
        <canvas id="fournisseursChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('fournisseursChart').getContext('2d');
        var fournisseursChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo $labels_json; ?>,
                datasets: [{
                    label: 'Total des achats',
                    data: <?php echo $values_json; ?>,
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
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
