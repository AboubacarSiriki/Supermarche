<?php

// Inclure le fichier de connexion à la base de données
include_once '../CONFIGURATION/connexion.php';

// Récupérer les données d'analyse des ventes depuis la base de données
$query = 'SELECT * FROM ventes';
$result = mysqli_query($conn, $query);

// Traitement des données pour les graphiques
$data_labels = [];
$data_values = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data_labels[] = $row['date_vente']; // Dates des ventes comme étiquettes
    $data_values[] = $row['quantite']; // Quantités vendues comme valeurs
}

// Convertir les données en format JSON pour une utilisation avec JavaScript
$labels_json = json_encode($data_labels);
$values_json = json_encode($data_values);
