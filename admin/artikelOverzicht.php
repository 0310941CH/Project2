<?php require '../config/config.php'; ?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/artikelOverzicht.css">
    <title>Admin - Artikel overzicht</title>
</head>

<body>
    <table class="tabelOverzicht">
        <tr>
            <th>ID</th>
            <th>Titel</th>
            <th>Auteur</th>
            <th>Inzien</th>
            <th>Edit</th>
            <th>Verwijder</th>
        </tr>
        <?php

        $berichten = $pdo->query("SELECT * FROM berichten")->fetchAll();
        foreach ($berichten as $berichtInfo) {
            echo '<tr>';
            echo '<td> ' . $berichtInfo['berichtId'] . '</td>';
            echo '<td> ' . $berichtInfo['titel'] . '</td>';
            echo '<td> ' . $berichtInfo['auteur'] . '</td>';
            echo "<td><a href='../artikel.php?id=" . $berichtInfo['berichtId'] . "'>Bekijk</a></td>";
            echo "<td><a href='WIJZIGPAGINA.php?id=" . $berichtInfo['berichtId'] . "'>Wijzig</a></td>";
            echo '<td class="tabelOverzichtCenter"><a href="../includes/verwijderArtikel.php?id=' . $berichtInfo['berichtId'] . '"><img class="verwijder" src="../images/delete.png" alt="Verwijder knop"></a></td>';
            echo '</tr>';
        }
        ?>
    </table>


</body>

</html>