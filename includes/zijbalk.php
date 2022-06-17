<head>
    <link rel="stylesheet" href="./style/zijBalk.css">
</head>
<h1>Net Binnen <img src="./images/netBinnenIcon.svg" alt="Net Binnen icon"></h1>
<ul>
    <?php
    //Vooraf gedefinieerde variables
    $limit = 4;

    $artikel = $conn->prepare("SELECT * FROM berichten ORDER BY berichtId DESC LIMIT :limit");
    $artikel->bindValue('limit', $limit, PDO::PARAM_INT);
    $artikel->execute();
    $data = $artikel->fetchAll();
    foreach ($data as $artikel) {
        $datumFormat = date("h:i", strtotime($artikel["datum_toegevoegd"]));
        echo "<div class='netBinnenWrapper'>";
        echo "<p class='datumArtikel'>" . $datumFormat . "</p> ";
        echo "<a class='titelArtikel' href='artikel.php?id=" . $artikel["berichtId"] . "'>" . $artikel["titel"] . "</a><br>";
        echo "</div>";
    }
    ?>
</ul>
<hr class="divider">

<h1>Nieuwsvideo's</h1>
<div class="videoContainer">
    <div class="videoLinks">
        <div class="videoWrapper">
            <a href="https://www.nu.nl/275013/video/zo-blijft-je-huis-koel-tijdens-zomerse-dagen.html">
                <img src="./images/extra/video1.png" class="videoAfbeelding" alt="Video zomerdagen">
                <img class="videoPlay" src="./images/playIcon.svg" alt="Play icon">
        </div>
        <p class="videoTitel">Zo blijft je huis koel tijdens zomerse dagen</p></a>
        <div class="videoWrapper">
            <a href="https://www.nu.nl/293595/video/eu-leiders-arriveren-in-kyiv-een-belangrijk-moment.html">
                <img src="./images/extra/video2.png" class="videoAfbeelding" alt="EU leiders Kyiv">
                <img class="videoPlay" src="./images/playIcon.svg" alt="Play icon">
        </div>
        <p class="videoTitel">EU-leiders arriveren in Kyiv: 'Een belangrijk moment</p></a>
    </div>
    <div class="videoRechts">
        <div class="videoWrapper">
            <a href="https://www.nu.nl/293594/video/enorme-tornado-raast-over-dorp-in-china.html">
                <img src="./images/extra/video3.png" class="videoAfbeelding" alt="Tornado Chinees dorp">
                <img class="videoPlay" src="./images/playIcon.svg" alt="Play icon">
        </div>
        <p class="videoTitel">Enorme tornado raast over dorp in China</p></a>
        <div class="videoWrapper">
            <a href="https://www.nu.nl/293591/video/indiase-hulpdiensten-halen-jongen-na-dagen-uit-put.html">
                <img src="./images/extra/video4.png" class="videoAfbeelding" alt="Jongen uit put gered India">
                <img class="videoPlay" src="./images/playIcon.svg" alt="Play icon">
        </div>
        <p class="videoTitel">Indiase hulpdiensten halen jongen na dagen uit put</p>
        </a>
    </div>
</div>

<a href="https://shop.nu.nl/product/fletcher-hotels?&utm_source=nushop&utm_medium=cms_banner&utm_campaign=fletcherjuni">
    <h1>NUshop</h1>
    <img src="./images/extra/nuShop2.png" class="shopAfbeelding" alt="NU Shop Fletcher Hotels">
</a>