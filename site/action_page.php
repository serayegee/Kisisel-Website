<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isimsoyisim = $_POST["isimsoyisim"];
    $eposta = $_POST["eposta"];
    $cinsiyet = $_POST["cinsiyet"];
    $os_type = $_POST["os_type"];
    $mesaj = $_POST["mesaj"];

    echo "Ad: " . $isimsoyisim . "<br>";
    echo "E-posta: " . $eposta;
    echo "Cinsiyet: " . $cinsiyet . "<br>";
    echo "Bölge: " . $os_type . "<br>";
    echo "Mesaj: " . $mesaj . "<br>";
}
?>
