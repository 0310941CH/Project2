<?php
session_start();
require '../config/config.php'; ?>
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
            <th>Wijzig</th>
            <th>Verwijder</th>
        </tr>
        <?php
        // Controleer of gebruiker juiste permissie's heeft, anders terug sturen naar index.php
        if ($_SESSION['admin'] == 1) {

            $berichten = $pdo->query("SELECT * FROM berichten")->fetchAll(); //Selecteer alle gegevens uit tabel berichten.
            foreach ($berichten as $berichtInfo) { // Loopt door alle gegevens heen en echo'd deze op de pagina.
                echo '<tr>';
                echo '<td> ' . $berichtInfo['berichtId'] . '</td>';
                echo '<td> ' . $berichtInfo['titel'] . '</td>';
                echo '<td> ' . $berichtInfo['auteur'] . '</td>';
                echo "<td><a href='../artikel.php?id=" . $berichtInfo['berichtId'] . "'>Bekijk</a></td>"; // stuurt je door naar het artikel
                echo "<td><a href='../admin/artikelWijzigen.php?id=" . $berichtInfo['berichtId'] . "'>Wijzig</a></td>"; // stuurt je door naar een pagina waar je het artikel kan wijzigen
                echo '<td class="tabelOverzichtCenter"><a href="../includes/verwijderArtikel.php?id=' . $berichtInfo['berichtId'] . '"><img class="verwijder" src="../images/delete.png" alt="Verwijder knop"></a></td>'; // Knop voor het verwijderen van het artikel.
                echo '</tr>';
            }
        } else {
            header("Location: ../index.php");
            exit();
        }
        ?>
    </table>

</body>

</html>