<?php
session_start();
require '../config/config.php'; ?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/ArtikelWijzigen.css">
    <title>Admin - Artikel wijzigen</title>
</head>

<body>
    <?php include '../admin/adminMenu.php'; ?>
    <div class="content">
        <div class="containerWijziging">
            <h1 class="titelCenter">Artikel wijzigen</h1>
            <div class="contentArtikel">
                <?php
                if ($_SESSION['admin'] == 1) {
                    $datumAanpassing = date("Y/m/d/H/i/s"); // Huidige datum
                    $id = $_GET["id"];

                    if (isset($_POST["opslaan"])) { // check of dat de submit knop "opslaan" als is ingeklikt
                        $info = [
                            'titel' => $_POST["titel"],
                            'samenvatting' => $_POST["samenvatting"],
                            'omschrijving' => $_POST["bericht"],
                            'datumAangepast' => $datumAanpassing,
                            'id' => $id
                        ];
                        // Update statement om de gegevens uit de form in de database te zetten. 
                        $update = "UPDATE berichten SET titel=:titel, samenvatting=:samenvatting, omschrijving=:omschrijving, datum_aangepast=:datumAangepast WHERE berichtId=:id";
                        $query = $pdo->prepare($update);
                        $query->execute($info);
                    }

                    $select = $pdo->prepare("SELECT * FROM berichten WHERE berichtId=:id"); // Selecteer gegevens uit database om in de form te laten zien wat er nu in staat.
                    $select->execute(['id' => $id]);
                    $berichtData = $select->fetchAll();
                    foreach ($berichtData as $bericht) {
                        echo '<form method="POST">
        <label for="id">Bericht ID:</label><br>
        <input type="text" id="id" name="id" readonly value=" ' . $bericht["berichtId"] . ' "></input><br>
        <label for="postDatum">Originele post datum:</label><br>
        <input type="text" id="postDatum" name="postDatum" readonly value=" ' . $bericht["datum_toegevoegd"] . ' "></input><br>
        <label for="updateDatum">Geüpdatet post datum:</label><br>
        <input type="text" id="updateDatum" name="updateDatum" readonly value=" ' . $bericht["datum_aangepast"] . ' "></input><br>
        <label for="auteur">Auteur:</label><br>
        <input type="text" id="auteur" name="auteur" readonly value=" ' . $bericht["auteur"] . ' "></input><br>
        <label for="categorie">Categorie:</label><br>
        <input type="text" id="categorie" name="categorie" readonly value=" ' . $bericht["categorie"] . ' "></input><br>
        <label for="titel">Titel:</label><br>
        <input type="text" id="titel" name="titel" value="' . $bericht["titel"] . ' "></input><br>
        <label for="samenvatting">Samenvatting:</label><br>
        <textarea id="samenvatting" name="samenvatting" rows="3" cols="50" >' . $bericht["samenvatting"] . '</textarea><br>
        <label for="bericht">Bericht:</label><br>
        <textarea id="bericht" name="bericht" rows="8" cols="80">' . $bericht["omschrijving"] . '</textarea><br>
        <input type="submit" value="opslaan" name="opslaan" id="opslaan">
    </form>';
                    };
                } else {
                    header("Location: ../index.php");
                    exit();
                }

                ?>
            </div>
        </div>
</body>

</html>