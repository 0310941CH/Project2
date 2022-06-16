<?php require 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="./style/artikel.css">
    <title>Artikel</title>
</head>

<body>
    <div class="contentContainer">
        <div class="artikelContainer">
            <?php
            //Artikel ID uit de get halen.
            $id = $_GET["artikelID"];

            $artikel = $conn->prepare("SELECT * FROM berichten WHERE berichtId = :id");
            $artikel->execute(['id' => $id]);
            $artikelInfo = $artikel->fetchAll();
            foreach ($artikelInfo as $data) {
                echo "<div class='afbeeldingTitelBox'><img class='artikelAfbeelding' src='./images/artikelAfbeelding/" . $data['images'] . "' alt='Artikel afbeelding'>";
                echo "<div class='artikelTitel'><h1>" . $data["titel"] . "</h1><br></div></div>";
                echo "<div class='postInfo'>" . $data["datum_toegevoegd"] . "<br>";
                echo "Laatste update: " . $data["datum_aangepast"] . "</div><br>";
                echo "<div class='samenvatting'>" . $data["samenvatting"] . "</div><br>";
                echo $data["omschrijving"] . "<br>";
                echo "<div class='postInfo'>Door: " .  $data["auteur"] . "<br>";
                echo "Beeld: " .  $data["image_auteur"] . "</div><br>";
            }
            ?>
        </div>
        <div class="zijContainer">
            <?php include 'includes/zijLijnArtikel.php'; ?>
        </div>
    </div>
</body>

</html>