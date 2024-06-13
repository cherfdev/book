<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Traitement du formulaire lorsqu'il est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $numero = $_POST["Numero"];
    $password = $_POST["password"];

    // Préparer et lier les paramètres
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, phone_number, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fname, $lname, $numero, $password);

    // Exécuter la requête préparée
    if ($stmt->execute()) {
        echo "Inscription réussie";
    } else {
        echo "Erreur: " . $stmt->error;
    }

    // Fermer la déclaration
    $stmt->close();
}

// Fermer la connexion
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Location de Maisons</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div class="wrapper">
    <section class="form signup">
        <header style="text-align: center;">House ware</header>
        <form id="signup-form" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="name-details">
                <div class="field input">
                    <label for="fname">Prénom</label>
                    <input type="text" id="fname" name="fname" placeholder="Votre prénom" required>
                </div>
                <div class="field input">
                    <label for="lname">Nom</label>
                    <input type="text" id="lname" name="lname" placeholder="Votre nom" required>
                </div>
            </div>
            <div class="field input">
                <label for="Numero">Numéro de téléphone</label>
                <input type="text" id="Numero" name="Numero" placeholder="Entrez votre Numéro de téléphone" required>
            </div>
            <div class="field input">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrez un mot de passe" required>
                <i class="fas fa-eye toggle-password"></i>
            </div>
            <div class="field button">
                <input type="submit" value="Inscription">
            </div>
        </form>
        <div class="link">Déjà membre ? <a href="login.php">Connectez-vous</a></div>
    </section>
</div>
<script src="js/pass-show-hide.js"></script>
<script src="js/signup.js"></script>
</body>
</html>