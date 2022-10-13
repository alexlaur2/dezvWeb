<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "report_inf";
$conn = new mysqli($servername, $username, $password, $dbname);
$id_locatie = $conn->query("SELECT * FROM denuntator ORDER BY id_denuntator DESC LIMIT 1");
$result = mysqli_fetch_array($id_locatie);
$nume = $result['nume'];
$skey = $result['skey'];
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="top_menu">
    <a href="/">Home</a>
    <a href="/check.php">Verificare</a>
    <a href="/admin.php">Operator</a>
</div>
<div class="info-div window">
    <h1>Infractiunea a fost raportata cu succes</h1>
</div>
    <div class="window">
        <h1 style="font-size: 20px">Pentru a verifica statul raportului notati datele:</h1>
        <h2 style="font-size: 15px">Numele:<?php
            print $nume
            ?></h2>
        <h2 style="font-size: 15px">Cuvantul cheie:<?php
            print $skey
            ?></h2></h2>
        <div class="button">
            <a href="check.php">
                <input type="submit" value="Verifica" class="btn">
            </a>
        </div>
    </div>
</body>
</html>