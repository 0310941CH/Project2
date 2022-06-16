<h2>Net Binnen</h2>
<?php
//Vooraf gedefinieerde variables
$limit = 4;

$artikel = $conn->prepare("SELECT * FROM berichten ORDER BY berichtId DESC LIMIT :limit");
$artikel->bindValue('limit', $limit, PDO::PARAM_INT);
$artikel->execute();
$data = $artikel->fetchAll();
foreach ($data as $artikel) {
    echo $artikel["datum_toegevoegd"] . " ";
    echo "<a href='artikel.php?id=" . $artikel["berichtId"] . "'>" . $artikel["titel"] . "</a><br>";
}
?>
<hr class="divider">

<h2>Video's</h2>

<h2>NUshop</h2>
<img src="./images/extra/nuShop2.png" class="" href="https://shop.nu.nl/product/fletcher-hotels?&utm_source=nushop&utm_medium=cms_banner&utm_campaign=fletcherjuni" alt="NU Shop Fletcher Hotels">