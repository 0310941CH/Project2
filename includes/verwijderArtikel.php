<?php
session_start();

if ($_SESSION['admin'] == 1) {
    require '../config/config.php';

    $id = $_GET["id"]; // Geeft de waarde van get "id" aan het variable id

    $pdo->prepare("DELETE FROM berichten WHERE berichtId=?")->execute([$id]); // Verwijder nieuws artikel van het meegegeven id.

    header('Location: ../admin/artikelOverzicht.php');
    exit;
} else {
    header("Location: ../index.php");
    exit();
}
