<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/artikel.css">
    <title>Algemeen | NU.nl</title>
</head>

<body>
    <?php require_once("./includes/nav.php"); ?>
    <div class="contentContainer">
        <div class="artikelContainer">
            <?php
            // limiet voor de artikelen
            $limitArtikelAfbeelding = 1;
            $limitArtikel = 4;
    $limitArtikelen = 7;

    // Algemene artikelen
    $artikel = $pdo->prepare("SELECT * FROM berichten WHERE berichtId = (SELECT MAX(berichtId) FROM berichten) ORDER BY berichtId DESC LIMIT :limit"); // Haalt het laatste artikel uit de database
            $artikel->bindValue('limit', $limitArtikelAfbeelding, PDO::PARAM_INT);
            $artikel->execute();
            $artikelInfo = $artikel->fetchAll();
            foreach ($artikelInfo as $data) {
                echo "<div class='afbeeldingTitelBox'><img class='artikelAfbeelding' src='./images/artikelAfbeelding/" . $data['images'] . "' alt='Artikel afbeelding'>";
                echo "<div class='artikelTitel'><h1>" . $data["titel"] . "</h1><br></div></div>";
            }

            $artikel = $pdo->prepare("SELECT * FROM berichten WHERE berichtId < (SELECT MAX(berichtId) FROM berichten) ORDER BY berichtId DESC LIMIT :limit"); // Haalt op een na de laatste 4 artikelen uit de database.
            $artikel->bindValue('limit', $limitArtikel, PDO::PARAM_INT);
            $artikel->execute();
            $artikelInfo = $artikel->fetchAll();
            foreach ($artikelInfo as $data) {
                $str = $data['titel'];
                if (strlen($data['titel']) > 70) { // Controleert of de string lengte langer is dan 70
                    $str = explode("\n", wordwrap($data['titel'], 50)); // haalt alles weg na 70 characters
                    $str = $str[0] . '...'; // zet "..." neer achter de string
                }
                echo "<div class=''><li>";
                echo "<a class='titel' href='artikel.php?id=" . $data["berichtId"] . "'>" . $str . "</a>";
                echo "</li></div>";
            }
    echo "<br>";

    // Artikelen binnenland
    $binnenland = "binnenland"; // categorie
            echo "<h1 class='kopTitel'>Binnenland</h1>";
    $artikel = $pdo->prepare("SELECT * FROM berichten WHERE categorie =:politiek ORDER BY berichtId DESC LIMIT :limit"); // Haalt het laatste artikel uit de database
    $artikel->bindValue('politiek', $binnenland);
    $artikel->bindValue('limit', $limitArtikelAfbeelding, PDO::PARAM_INT);
    $artikel->execute();
            $artikelInfo = $artikel->fetchAll();
            foreach ($artikelInfo as $data) {
                echo "<div class='afbeeldingTitelBox'><img class='artikelAfbeelding' src='./images/artikelAfbeelding/" . $data['images'] . "' alt='Artikel afbeelding'>";
                echo "<div class='artikelTitel'><h1>" . $data["titel"] . "</h1><br></div></div>";
            }

    $artikel = $pdo->prepare("SELECT * FROM berichten WHERE categorie =:binnenland AND berichtId < (SELECT MAX(berichtId) FROM berichten) ORDER BY berichtId DESC LIMIT :limit"); // Haalt op een na de laatste 4 artikelen uit de database.
    $artikel->bindValue('binnenland', $binnenland);
    $artikel->bindValue('limit', $limitArtikelen, PDO::PARAM_INT);
    $artikel->execute();
    $artikelInfo = $artikel->fetchAll();
    foreach ($artikelInfo as $data) {
        $str = $data['titel'];
        if (strlen($data['titel']) > 70) { // Controleert of de string lengte langer is dan 70
            $str = explode("\n", wordwrap($data['titel'], 50)); // haalt alles weg na 70 characters
            $str = $str[0] . '...'; // zet "..." neer achter de string
        }
        echo "<div class=''><li>";
        echo "<a class='titel' href='artikel.php?id=" . $data["berichtId"] . "'>" . $str . "</a>";
        echo "</li></div>";
    }
    echo "<br>";

    // artikelen buitenland
    $buitenland = "buitenland"; // categorie
            echo "<h1 class='kopTitel'>Buitenland</h1>";
    $artikel = $pdo->prepare("SELECT * FROM berichten WHERE categorie =:politiek ORDER BY berichtId DESC LIMIT :limit"); // Haalt het laatste artikel uit de database
    $artikel->bindValue('politiek', $buitenland);
    $artikel->bindValue('limit', $limitArtikelAfbeelding, PDO::PARAM_INT);
    $artikel->execute();
    $artikelInfo = $artikel->fetchAll();
    foreach ($artikelInfo as $data) {
        echo "<div class='afbeeldingTitelBox'><img class='artikelAfbeelding' src='./images/artikelAfbeelding/" . $data['images'] . "' alt='Artikel afbeelding'>";
        echo "<div class='artikelTitel'><h1>" . $data["titel"] . "</h1><br></div></div>";
    }

    $artikel = $pdo->prepare("SELECT * FROM berichten WHERE categorie =:buitenland AND berichtId < (SELECT MAX(berichtId) FROM berichten) ORDER BY berichtId DESC LIMIT :limit"); // Haalt op een na de laatste 4 artikelen uit de database.
    $artikel->bindValue('buitenland', $buitenland);
    $artikel->bindValue('limit', $limitArtikelen, PDO::PARAM_INT);
    $artikel->execute();
    $artikelInfo = $artikel->fetchAll();
    foreach ($artikelInfo as $data) {
        $str = $data['titel'];
        if (strlen($data['titel']) > 70) { // Controleert of de string lengte langer is dan 70
            $str = explode("\n", wordwrap($data['titel'], 50)); // haalt alles weg na 70 characters
            $str = $str[0] . '...'; // zet "..." neer achter de string
        }
        echo "<div class=''><li>";
        echo "<a class='titel' href='artikel.php?id=" . $data["berichtId"] . "'>" . $str . "</a>";
        echo "</li></div>";
    }
    echo "<br>";

    // Artikelen politiek
    $politiek = "politiek"; // categorie
            echo "<h1 class='kopTitel'>Politiek</h1>";
    $artikel = $pdo->prepare("SELECT * FROM berichten WHERE categorie =:politiek ORDER BY berichtId DESC LIMIT :limit"); // Haalt het laatste artikel uit de database
    $artikel->bindValue('politiek', $politiek);
    $artikel->bindValue('limit', $limitArtikelAfbeelding, PDO::PARAM_INT);
    $artikel->execute();
    $artikelInfo = $artikel->fetchAll();
    foreach ($artikelInfo as $data) {
        echo "<div class='afbeeldingTitelBox'><img class='artikelAfbeelding' src='./images/artikelAfbeelding/" . $data['images'] . "' alt='Artikel afbeelding'>";
        echo "<div class='artikelTitel'><h1>" . $data["titel"] . "</h1><br></div></div>";
    }

    $artikel = $pdo->prepare("SELECT * FROM berichten WHERE categorie =:politiek AND berichtId < (SELECT MAX(berichtId) FROM berichten) ORDER BY berichtId DESC LIMIT :limit"); // Haalt op een na de laatste 4 artikelen uit de database.
    $artikel->bindValue('politiek', $politiek);
    $artikel->bindValue('limit', $limitArtikelen, PDO::PARAM_INT);
    $artikel->execute();
    $artikelInfo = $artikel->fetchAll();
    foreach ($artikelInfo as $data) {
        $str = $data['titel'];
        if (strlen($data['titel']) > 70) { // Controleert of de string lengte langer is dan 70
            $str = explode("\n", wordwrap($data['titel'], 50)); // haalt alles weg na 70 characters
            $str = $str[0] . '...'; // zet "..." neer achter de string
        }
        echo "<div class=''><li>";
        echo "<a class='titel' href='artikel.php?id=" . $data["berichtId"] . "'>" . $str . "</a>";
        echo "</li></div>";
    }
            ?>
            <hr class="divider">
        </div>
        <div class="zijContainer">
            <?php include 'includes/zijbalk.php'; ?>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>


</html>