<?php
if ($_SESSION['redacteur'] == 1 || $_SESSION['administrator'] == 2) {
    require '../config/config.php';

    $id = $_GET["id"]; // Geeft de waarde van get "id" aan het variable id

    $pdo->prepare("DELETE FROM berichten WHERE berichtId=?")->execute([$id]); // Verwijder nieuws artikel van het meegegeven id.

    header('Location: ../admin/artikelOverzicht.php');
    exit;
} else {
    header("Location: ../index.php");
    exit();
}
