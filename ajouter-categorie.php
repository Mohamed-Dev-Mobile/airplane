<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['send_categorie'])) {
    $nom = $_POST['nom_categorie'];

    $stmt = $conn->prepare("INSERT INTO `categorie` (`nom`) VALUES (?)");
    if ($stmt) {
        $stmt->bind_param("s", $nom);
        $stmt->execute();
        echo "Catégorie ajoutée avec succès.";
        $stmt->close();
    } else {
        echo "Erreur de préparation : " . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajouter une Catégorie - AeroParts</title>
    <link rel="stylesheet" href="style.css"> <!-- si tu as un fichier CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">

        <h2>Ajouter une Catégorie</h2>
        <form action="" method="POST">
            <label for="nom_categorie">Nom de la catégorie :</label>
            <input type="text" id="nom_categorie" name="nom_categorie" required>

            <button type="submit" name="send_categorie">Ajouter</button>
        </form>
    </div>

</body>

</html>