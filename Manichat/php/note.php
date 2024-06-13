<?php
// Date du message (vous pouvez remplacer cette valeur par la date du message réelle)
$messageDate = strtotime("2024-05-03"); // Exemple de date, vous devriez utiliser la date du message réel

// Date actuelle
$now = time();

// Calculer la différence en secondes entre la date actuelle et la date du message
$diffSeconds = $now - $messageDate;

// Calculer la différence en jours
$diffDays = floor($diffSeconds / (60 * 60 * 24));

// Spécifier la date en fonction de la différence de jours
if ($diffDays == 0) {
    $messageDateText = "Aujourd'hui";
} elseif ($diffDays == 1) {
    $messageDateText = "Hier";
} elseif ($diffDays == 2) {
    $messageDateText = "Avant-hier";
} elseif ($diffDays >= 30) {
    $messageDateText = "Il y a un mois ou plus";
} else {
    // Pour les autres cas, afficher la date normalement
    $messageDateText = date("d/m/Y", $messageDate); // Format de date à adapter selon vos besoins
}

// Texte du message (vous devrez remplacer cette valeur par le texte réel du message)
$messageText = "Bonjour, comment allez-vous ?";

// Combiner le texte du message et la date
$completeMessage = $messageText . " - " . $messageDateText;

// Afficher le message complet dans la zone de texte appropriée
// Remplacez 'zone_de_texte_id' par l'identifiant de votre zone de texte
echo '<textarea id="zone_de_texte_id">' . $completeMessage . '</textarea>';
?>