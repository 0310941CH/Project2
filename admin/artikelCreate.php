<?php
session_start();
include_once("../config/config.php");

// Checken of het een redachteur is of niet
if ($_SESSION['admin'] == 1) {
    if (isset($_POST['submitCreate'])) {
        // Hier worden alle dingen gesetupped voor het verplaatsen van de afbeelding die ze erbij hebben gevoegd

        $pathDirectory = "../images/artikelAfbeelding/";
        $fullpath = $pathDirectory . basename($_FILES["image"]["name"]);
        $uploadValidation = 1;
        $fileType = strtolower(pathinfo($fullpath, PATHINFO_EXTENSION));
        //Kijkt of de afbeelding wel een geldig bestand is
        $imagecheck = getimagesize($_FILES["image"]["tmp_name"]);
        if ($imagecheck !== false) {
            $uploadValidation = 1;
        } else {
            echo "File is not an valid image";
            $uploadValidation = 0;
            exit();
        }
        // Kijkt of de afbeelding die erin toegevoegd moet worden al in de map zit of niet
        if (file_exists($fullpath)) {
            echo "Sorry the image already exists.";
            $uploadValidation = 0;
            exit();
        }
        //Kijkt of de afbeelding een png is of niet
        if ($fileType != "png") {
            echo "Sorry, Only PNG files are allowed to upload";
            $uploadValidation = 0;
            exit();
        }
        // De afbeelding uploaden of zeggen dat de upload niet gelukt is als er 0 uit is gekomen met de checks. 
        if ($uploadValidation = 0) {
            echo "Sorry your image wasn't uploaded. Try again";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $fullpath)) {
                // Kijkt of alles wel is ingevuld
                if ($_POST['titel'] != "" && $_POST['samenvatting'] != "" && $_POST['omschrijving'] != "" && $_POST['auteur'] != "" && $_POST['fotoauteur'] != "" && $_POST['categorie'] != "") {
                    $titel = $_POST['titel'];
                    $samenvatting = $_POST['samenvatting'];
                    $omschrijving = $_POST['omschrijving'];
                    $auteur = $_POST['auteur'];
                    date_default_timezone_set("Europe/Amsterdam");
                    $datumToegevoegd = date("Y/m/d/H/i/s");
                    $datumAangepast = date("Y/m/d/H/i/s");
                    $image = basename($_FILES["image"]["name"]);
                    $fotoauteur = $_POST['fotoauteur'];
                    $categorie = $_POST['categorie'];
                    // try catch voor het inserten naar de database
                    try {
                        $data = $pdo->prepare("INSERT INTO `berichten` (`titel`, `samenvatting`, `omschrijving`, `datum_toegevoegd`, `datum_aangepast`, `auteur`, `images`, `image_auteur`, `categorie`) VALUES
                        ('$titel', '$samenvatting', '$omschrijving', '$datumToegevoegd', '$datumAangepast', '$auteur', '$image', '$fotoauteur', '$categorie')");
                        $data->execute();
                    } catch (PDOException $e) {
                        echo "There was a error";
                    }
                    header("Location: ../admin/artikelOverzicht.php");
                    exit();
                } else {
                    echo "You need to input all fields";
                }
            } else {
                echo "Sorry, your image wasn't uploaded a error occured.";
                exit();
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nu.NL Login</title>
    <link rel="stylesheet" href="../style/">
</head>

<body>
    <?php include '../admin/adminMenu.php'; ?>
    <h1>Artikel aanmaken</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Test</th>
                <th>Input</th>
            </tr>
            <tr>
                <td>Titel</td>
                <td><input type="text" name="titel" required></td>
            </tr>
            <tr>
                <td>Samenvatting</td>
                <td><textarea name="samenvatting" rows="5" cols="50" required></textarea></td>
            </tr>
            <tr>
                <td>Omschrijving</td>
                <td><textarea name="omschrijving" rows="5" cols="50" required></textarea></td>
            </tr>
            <tr>
                <td>Auteur</td>
                <td><input type="text" name="auteur" required></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="image" accept=".png" required></td>
            </tr>
            <tr>
                <td>Auteur Foto</td>
                <td><input type="text" name="fotoauteur" required></td>
            </tr>
            <tr>
                <td>Categorie</td>
                <td><select name="categorie">
                        <option value="Binnenland">Binnenland</option>
                        <option value="Buitenland">Buitenland</option>
                        <option value="Politiek">Politiek</option>
                    </select></td>
            </tr>
        </table>
        <button type="submit" name="submitCreate">Maak het artikel aan!</button>
    </form>
</body>